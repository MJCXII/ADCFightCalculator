// Make request to api backend to the below url
// API: http://cdn.merakianalytics.com/riot/lol/resources/latest/en-US/items/

const { default: axios } = require('axios');

axios.get('http://cdn.merakianalytics.com/riot/lol/resources/latest/en-US/items/')
    .then(response => {
        return response.data;
    })
    .catch(error => {
        console.log(error);
    });

    //above request needs to be in backend and this service make a call to backend to get the data