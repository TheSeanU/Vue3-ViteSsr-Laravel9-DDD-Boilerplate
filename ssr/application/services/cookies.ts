/* eslint-disable complexity */
export const getCookies = (key: string): string | null => {
    let value =
        decodeURIComponent(
            document.cookie.replace(
                // eslint-disable-next-line max-len
                new RegExp(
                    `(?:(?:^|.*;)\\s*${encodeURIComponent(key).replace(/[-.+*]/g, '\\$&')}\\s*\\=\\s*([^;]*).*$)|^.*$`,
                ),
                '$1',
            ),
        ) || null;

    if (value && value.substring(0, 1) === '{' && value.substring(value.length - 1, value.length) === '}') {
        try {
            value = JSON.parse(value);
        } catch (e) {
            return value;
        }
    }
    return value;
};

export const setCookies = (name: string, value: string, ttl: string | number) => {
    if (!name) throw new Error('Cookie name is not found in the first argument.');
    if (/^(?:expires|max\-age|path|domain|secure|SameSite)$/i.test(name)) {
        throw new Error(
            // eslint-disable-next-line max-len
            `Cookie name illegality. Cannot be set to ["expires","max-age","path","domain","secure","SameSite"]\t current name name: ${name}`,
        );
    }

    // eslint-disable-next-line no-param-reassign
    if (value && value.constructor === Object) value = JSON.stringify(value);

    return (document.cookie = `${name}=${value}; path=/; max-age=${ttl}; secure; samesite=strict`);
};
