import {Login} from 'ssr/domains/auth/login/types';
import {getFromApi, postToApi} from './api';
import {ref} from 'vue';
import {setCookies} from './cookies';

interface User {
    name: string;
}

const AUTH_TOKEN = 'Authorization';

export const loggedIn = ref<{
    bool: boolean;
    data: Array<User>;
}>({bool: false, data: []});

export const login = async (form: Login) => {
    try {
        const resp = await postToApi('auth/login', form);
        if (resp.status === 200) {
            setCookies(AUTH_TOKEN, resp.data.token, resp.data.tokenTTL);
            loggedIn.value.bool = true;
            loggedIn.value.data = resp.data.user;
        }
    } catch (e) {
        console.error(e);
    }
};

export const me = async () => {
    try {
        await getFromApi('auth/me');
    } catch (e) {
        console.error(e);
    }
};
