import axios, {type Method, type AxiosPromise, type AxiosRequestConfig} from 'axios';
import {ENDPOINT} from './constants';
import handleAxiosError from 'axios';
import handleUnexpectedError from 'axios';
import {getCookies} from './cookies';

const createRequest = (method: Method, uri: string, body?: FormData | Object | unknown): AxiosRequestConfig => {
      const url = new URL(`${ENDPOINT}/${uri}`);
      console.log(url);

      const token = getCookies('Authorization');

      const headers = {
            Authorization: `Bearer ${token}`,
      };

      let data: FormData | Object | unknown;

      if (method != 'GET') {
            const bodyisFormData = body instanceof FormData;
            const bodyIsJson = body instanceof Object;

            if (bodyisFormData) {
                  Object.assign(headers, {'Content-Type': 'multipart/form-data'});
                  data = body;
            } else if (bodyIsJson) {
                  Object.assign(headers, {'Content-Type': 'application/json'});
                  data = JSON.stringify(body);
            } else {
                  data = body;
            }
      }

      return {
            url: url.href,
            headers,
            method,
            data,
      };
};

const makeRequest = async (config: AxiosRequestConfig): Promise<any> => {
      try {
            return await axios.request(config);
      } catch (error) {
            if (axios.isAxiosError(error) || error) {
                  handleAxiosError(error);
            } else {
                  handleUnexpectedError(error);
            }
      }
};

const callApi = async (method: Method, uri: string, body?: object): Promise<AxiosPromise> => {
      const requestConfig = createRequest(method, uri, body);
      return await makeRequest(requestConfig as AxiosRequestConfig);
};

export const getFromApi = (uri: string) => callApi('GET', uri);
export const postToApi = (uri: string, body: any) => callApi('POST', uri, body);
