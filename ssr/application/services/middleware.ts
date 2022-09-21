// src/middleware/log.js
export const log = ({next, to}) => {
    console.log(to.name);

    return next();
};

// eslint-disable-next-line import/export
export const auth = ({next, router}) => {
    if (!localStorage.getItem('Authentication')) return router.push({name: 'login'});

    return next();
};
