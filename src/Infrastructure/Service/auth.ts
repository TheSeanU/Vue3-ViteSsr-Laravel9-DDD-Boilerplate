import { computed } from "@vue/reactivity";
import { ref } from "vue";
import { postToApi, getFromApi } from "./api";
import { setCookies } from "./cookies";

const AUTH_TOKEN = 'Authorization';

export const loggedIn = ref({ bool: false as Boolean, data: Array });

export async function login(form: Object) {
    try {
        const resp = await postToApi('auth/login', form);
        if (resp.status === 200) {
            console.log(resp.data);
            

            setCookies(AUTH_TOKEN, resp.data.token, resp.data.tokenTTL)
            loggedIn.value.bool = true;
            loggedIn.value.data = resp.data.user;
        }
    } catch (e) {
        console.error(e);
        return;
    }
}

export async function me() {
    try {
        await postToApi('auth/me', {});
    } catch (e) {
        console.error(e);
        return;
    }
}
