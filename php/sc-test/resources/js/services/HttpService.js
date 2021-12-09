import axios from "axios"

export default class HttpService
{
    url = "https://sclaravel.herokuapp.com/api"

    getFact = (amount) => {
        if (amount && typeof amount !== 'number') {
            throw new Error('Amount param must be of type number');
        }
        if (!amount) {
            amount = 1;
        }
        let requestOptions = {
            method: 'GET',
            headers: {'Content-type' : 'application/json'}
        }
        return axios.request(`${this.url}/cat?amount=${amount}`, requestOptions)
    }
}
