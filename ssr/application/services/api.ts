import axios from 'axios';

const BACKEND = 'http://localhost:8000/api';

const api = axios.create({
    baseURL: BACKEND,
    withCredentials: true,
    headers: {
        Accept: 'application/json',
        'Content-Type': 'application/json',
    },
});

export const getFromApi = (uri: string) => api.get(uri);
export const postToApi = (uri: string, body: any) => api.post(uri, body);
