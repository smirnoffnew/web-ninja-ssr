import axios from 'axios';

const baseURL = 'api';

const headers = {
    'X-CSRF-TOKEN'    : window.Laravel.csrfToken,
    'X-Requested-With': 'XMLHttpRequest',
    'Accept': 'application/json'
};

export default axios.create({
    baseURL,
    headers,
});

