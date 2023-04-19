import axios from 'axios';

// const addressInput = document.getElementById('address').value;

// delete axios.defaults.headers.common['X-Requested-With'];

let autocompleteList = document.getElementById('autocomplete-list');

const input = document.getElementById('address');

input.addEventListener("keyup", function () {

        let userInput = document.getElementById('address').value;
        // console.log(userInput);
        if (userInput.trim().length < 3) {
            return;
        }
    
        const apiUrl = 'https://api.tomtom.com/search/2/geocode/';
        delete axios.defaults.headers.common['X-Requested-With'];
    
        axios.get(apiUrl + userInput + '.json', {
            params: {
                key: 'c4P3eR2jCkOGFFaGzYk7vwGVrmG9wsHs',
                typeahead: true,
                countrySet: 'IT'
            }
        })
            .then(function (response) {
                console.log(response.data.results);
                const results = response.data.results;
    
                // Svuota il container della lista
                // autocompleteList.innerHTML = '';
    
                // Creo i nuovi elementi della lista
                for (let i = 0; i < results.length; i++) {
                    const resultList = results[i].address.freeformAddress;
                    const liElement = document.createElement('li');
                    liElement.innerHTML = resultList;
                    liElement.addEventListener('click', function () {
                        input.value = resultList;
                        autocompleteList.innerHTML = '';
                    });
                    autocompleteList.appendChild(liElement);
                }
            })
            .catch(function (error) {
                console.log(error);
            });
        document.addEventListener('mouseup', function(e) {
            document.getElementById('autocompleteList');
            if (!autocompleteList.contains(e.target)) {
                autocompleteList.style.display = 'none';
            }
        });
    
    });


// const autocompleteList = document.getElementById('autocomplete-list');

// let options = {
//     searchOptions: {
//         key: "c4P3eR2jCkOGFFaGzYk7vwGVrmG9wsHs",
//         language: "it-IT",
//         limit: 5,
//     },
//     autocompleteOptions: {
//         key: "c4P3eR2jCkOGFFaGzYk7vwGVrmG9wsHs",
//         language: "it-IT",
//     },
// }
// let ttSearchBox = new tt.plugins.SearchBox(tt.services, options)
// let searchBoxHTML = ttSearchBox.getSearchBoxHTML()
// autocompleteList.append(searchBoxHTML)

// const elementSearch = document.querySelector('input.tt-search-box-input');
// const oldAddressValue = document.getElementById('old-value').innerHTML;
// elementSearch.value = oldAddressValue;
// elementSearch.setAttribute('id', 'address', 'placeholder', 'Insert address')
// // elementSearch.setAttribute('placeholder', 'Insert address')
// elementSearch.setAttribute('type', 'text')
// elementSearch.setAttribute('name', 'address')
// elementSearch.setAttribute('required', 'required')
// elementSearch.setAttribute('value', 'oldAddressValue')

