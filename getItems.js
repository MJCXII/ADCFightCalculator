// Gets all items
const axios = require('axios');
axios.get('http://cdn.merakianalytics.com/riot/lol/resources/latest/en-US/items.json')
    .then(function (response) {
        //console logs currently, change this to return the data to frontend instead
        console.log(response.data);
    });