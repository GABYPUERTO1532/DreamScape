/**
 * Save Reserves
 * @param {Object} form
 * @returns Boolean
 */
function localStorageSaveReserve(form){
    let reserves = localStorageGetReserves();
    let dateStart = new Date(form.dateStart).getTime();
    let dateEnd = new Date(form.dateEnd).getTime();
    let diffDays = (dateEnd - dateStart)/(1000*60*60*24);
    form.price = formatNumber(((parseInt(form.room) * 50000) + 100000) * diffDays);
    form.id = parseInt(reserves.length) + 1;
    reserves.push(form);
    let newRerserve = JSON.stringify(reserves); // Array JS - JSON
    localStorage.setItem('reserves', newRerserve)
    return true;
}

/**
 * Get Reserves
 * @returns Array reserves
 */
function localStorageGetReserves(){
    let reserves = JSON.parse(localStorage.getItem('reserves')); // JSON - Array JS
    if(!reserves) reserves = [];
    return reserves;
}