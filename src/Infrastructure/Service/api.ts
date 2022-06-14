import axios, {
    type Method,
    type AxiosPromise,
    type AxiosRequestConfig,

} from 'axios';
import { ENDPOINT } from './constants'
import handleAxiosError from 'axios';
import handleUnexpectedError from 'axios';



const TOKEN_COOKIE_NAME = 'Authorization';



const createRequest = (method: Method, uri: string, body?: any): AxiosRequestConfig => {
    const url = new URL(`${ENDPOINT}/${uri}`);

    const headers = { Authorization: `Bearer` }

    console.log(window.document);


    let data = undefined;

    if (method != 'GET') {
        const bodyisFormData = body instanceof FormData;
        const bodyIsJson = body instanceof Object;

        if (bodyisFormData) {
            data = body;
            Object.assign(headers, { 'Content-Type': 'multipart/form-data' });

        } else if (bodyIsJson) {
            data = JSON.stringify(body);
            Object.assign(headers, { 'Content-Type': 'application/json' });

        } else {
            data = body;
        }
    }

    return {
        url: url.href,
        headers,
        method,
        data
    };
};

const makeRequest = async (config: AxiosRequestConfig): Promise<any> => {
    try {
        return await axios.request(config);
    } catch (error) {
        if (axios.isAxiosError(error)) {
            handleAxiosError(error);
        } else {
            handleUnexpectedError(error);
        }
    }
}

const callApi = async (method: string, uri: string, body?: object): Promise<AxiosPromise> => {
    const requestConfig = createRequest(method, uri, body);
    console.log(requestConfig);


    return await makeRequest(requestConfig as AxiosRequestConfig);
}


export const getFromApi = (uri: string) => callApi("GET", uri);
export const postToApi = (uri: string, body: any) => callApi("POST", uri, body);



const getCookie = (name: string) => {
    const value = `; ${window.document.cookie}`;
    const parts = value.split(`; ${name}=`);

    return parts.length === 2 ? parts.pop()?.split(';').shift() : false;
}


