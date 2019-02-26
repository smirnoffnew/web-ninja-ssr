import axios from 'axios';

export default axios.create({
    baseURL: '/api/',
    timeout: 1000,
    headers: {
        'X-Requested-With': 'XMLHttpRequest',
        'Accept': 'application/json'
    }
});
