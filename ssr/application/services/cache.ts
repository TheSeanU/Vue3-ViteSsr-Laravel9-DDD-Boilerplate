export const putInCache = (key: string, value: any) => {
    localStorage.setItem(key, value);
};

export const getFromCache = (key: string) => localStorage.getItem(key);
