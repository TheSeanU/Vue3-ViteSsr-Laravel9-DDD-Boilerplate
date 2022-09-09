


export const putInCache = (key: string, value: any) => {
    localStorage.setItem(key, value);
};

export const getFromCache = (key: string) => {
    return localStorage.getItem(key);
};
