<?php

namespace App\Core\Traits;

use Exception;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use ReflectionException;

/**
 * Finds a model based on the repository name. For example if your repository is named "PostRepository" the trait will
 * try by default to find a "Post" model in "App\Models" directory.
 *
 * @package RobertKabat\Laratory\Traits\Repository
 */
trait FindsModels
{
    /** @var String|Model|null Fully qualified name of the model */
    public ?string $model = null;

    /** @var string Default namespace for Models */
    private static string $DEFAULT_NAMESPACE = 'App\Domain\*\Models';

    /**
     * Finds models. If user did not provide the model explicitly in the specific repository via the "model" property
     * the trait try to find a model that has the same name as the repository.
     *
     * @throws ReflectionException
     * @throws Exception
     */
    public function findModel()
    {
        // check if user manually provided the model, if yes return "true" as we don't need to look for anything else
        if ($this->isModelProvidedManually()) {
            return true;
        }

        // get the repository reflection
        $repositoryReflection = new \ReflectionClass($this);

        // get the model name we are looking for
        $modelName = strtoLower(preg_replace('/Repository/', '', $repositoryReflection->getShortName()));

        // find all models in default directory
        $modelFiles = File::allFiles($modelsDirectory = app_path() . '/Models/');

        // check if we can find model
        foreach ($modelFiles as $file) {
            // we found the file we were looking for
            if ($modelName === strtolower($file->getFilenameWithoutExtension())) {
                // if we already have a model here it means that it is not unique
                if (!empty($this->model)) {
                    throw new Exception('Looks like you have more than one model named ' .
                        $file->getFilename() . ' please specify pathToModel directory on your repository('
                        . $repositoryReflection->getFileName() . ') or give your models unique names.');
                }

                // assign the model to the property on the class
                $this->model =
                    self::$DEFAULT_NAMESPACE .
                    '\\' .
                    $file->getRelativePath() .
                    (!empty($file->getRelativePath()) ? '\\' : '') .
                    $file->getFilenameWithoutExtension();
            }
        }
    }

    /**
     * Check if user provided the model manually.
     *
     * @return bool
     * @throws Exception
     */
    private function isModelProvidedManually(): bool
    {
        // check if user provided model manually on the specific repository class
        if (!empty($this->model)) {
            // check if given class actually exists
            if (!class_exists($this->model)) {
                throw new Exception('Provided model cannot be found. Please make sure that \'' .
                    $this->model . '\' actually exists!');
            }

            // user has provided a model and it exists
            return true;
        }

        // user has not provided a model
        return false;
    }
}