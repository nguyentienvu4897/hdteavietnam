import {HTTP} from '../../core/plugins/http'
import CONSTANTS from '../../core/utils/constants';


export const addService = ({commit},opt) => {
    return new Promise((resolve, reject) => {
        HTTP.post('/api/service/create',opt).then(response => {
            return resolve(response.data);
        }).catch(error => {
            return reject(error);
        })
    });
};

export const listService = ({commit},opt) => {
    return new Promise((resolve, reject) => {
        HTTP.post('/api/service/list',opt).then(response => {
            return resolve(response.data);
        }).catch(error => {
            return reject(error);
        })
    });
};

export const deleteService = ({commit}, opt) => {
    return new Promise((resolve, reject) => {
        HTTP.get('/api/service/delete/'+opt.id).then(response => {
            return resolve(response.data);
        }).catch(error => {
            return reject(error);
        })
    });
}

export const detailService = ({commit}, opt) => {
    return new Promise((resolve, reject) => {
        HTTP.get('/api/service/edit/'+ opt.id).then(response => {
            return resolve(response.data);
        }).catch(error => {
            return reject(error);
        })
    });
}

export const addServiceCategory = ({commit}, opt) => {
    return new Promise((resolve, reject) => {
        HTTP.post('/api/service/category/create', opt).then(response => {
            return resolve(response.data);
        }).catch(error => {
            return reject(error);
        })
    });
}

export const listServiceCategory = ({commit}, opt) => {
    return new Promise((resolve, reject) => {
        HTTP.get('/api/service/category/list', opt).then(response => {
            return resolve(response.data);
        }).catch(error => {
            return reject(error);
        })
    });
}

export const detailServiceCategory = ({commit}, opt) => {
    return new Promise((resolve, reject) => {
        HTTP.get('/api/service/category/edit/'+ opt.id).then(response => {
            return resolve(response.data);
        }).catch(error => {
            return reject(error);
        })
    });
}

export const deleteServiceCategory = ({commit}, opt) => {
    return new Promise((resolve, reject) => {
        HTTP.delete('/api/service/category/delete/'+ opt.id).then(response => {
            return resolve(response.data);
        }).catch(error => {
            return reject(error);
        })
    });
}

export const listServiceType = ({commit}, opt) => {
    return new Promise((resolve, reject) => {
        HTTP.get('/api/service/type/list', opt).then(response => {
            return resolve(response.data);
        }).catch(error => {
            return reject(error);
        })
    });
}

export const addServiceType = ({commit}, opt) => {
    return new Promise((resolve, reject) => {
        HTTP.post('/api/service/type/create', opt).then(response => {
            return resolve(response.data);
        }).catch(error => {
            return reject(error);
        })
    });
}

export const deleteServiceType = ({commit}, opt) => {
    return new Promise((resolve, reject) => {
        HTTP.delete('/api/service/type/delete/'+ opt.id).then(response => {
            return resolve(response.data);
        }).catch(error => {
            return reject(error);
        })
    });
}

export const detailServiceType = ({commit}, opt) => {
    return new Promise((resolve, reject) => {
        HTTP.get('/api/service/type/edit/'+ opt.id).then(response => {
            return resolve(response.data);
        }).catch(error => {
            return reject(error);
        })
    });
}