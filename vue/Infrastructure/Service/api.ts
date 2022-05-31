import axios, { Axios, type AxiosRequestConfig } from 'axios';
import { ENDPOINT } from './constants'
import handleAxiosError from 'axios';
import handleUnexpectedError from 'axios';

const createRequest = (method: string, uri: string, body?: object) => {
    const url = new URL(`${ENDPOINT}/${uri}`);
    return { url: url.href, method, body };
};

async function makeRequest(config: AxiosRequestConfig): Promise<Axios> {
    try {
        return await axios.request(config);
    } catch (error) {
        if (axios.isAxiosError(error as AxiosRequestConfig)) {
            handleAxiosError(error);
        } else {
            handleUnexpectedError(error);
        }
    }
}

async function callApi(method: string, uri: string, body?: object): Promise<Axios> {
    const requestConfig = createRequest(method, uri, body);
    return await makeRequest(requestConfig as AxiosRequestConfig);
}


export const getFromApi = (uri: string) => callApi("GET", uri);
export const postToApi = (uri: string, body: object) => callApi("POST", uri, body);
