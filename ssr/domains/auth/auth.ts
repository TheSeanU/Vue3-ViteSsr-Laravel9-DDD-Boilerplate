import {Login} from './login/types';
import {Register} from './register/types';
import {getFromApi, postToApi} from 'ssr/application/services/api';
import {ref} from 'vue';
import {setCookies} from 'ssr/application/services/cookies';

const AUTH_TOKEN = 'Authorization';

export const loggedIn = ref({bool: false as boolean, data: Array});

export const login = async (form: Login) => {
    try {
        const {data, status} = await postToApi('auth/login', form);
        if (status === 200) {
            setCookies(AUTH_TOKEN, data.token, data.tokenTTL);
            loggedIn.value.bool = true;
            loggedIn.value.data = data.user;
        }
    } catch (e) {
        // eslint-disable-next-line no-console
        console.error(e);
    }
};

export const register = async (form: Register) => {
    try {
        await postToApi('auth/register', form);
    } catch (e) {
        // eslint-disable-next-line no-console
        console.error(e);
    }
};

export const me = async () => {
    try {
        await getFromApi('auth/me');
    } catch (e) {
        // eslint-disable-next-line no-console
        console.error(e);
    }
};
