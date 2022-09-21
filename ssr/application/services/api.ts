import {ENDPOINT} from './constants';
import axios from 'axios';

const api = axios.create({
    baseURL: ENDPOINT,
    withCredentials: ENDPOINT,
    headers: {
        Accept: 'application/json',
        'Content-Type': 'application/json',
    },
});

export const getFromApi = (uri: string) => api.get(uri);
export const postToApi = (uri: string, body: any) => api.post(uri, body);
