let insertedAnn = document.querySelector("#insertedAnn")
let insertedCounter = 0
const INSERTED__VALUE = 92
let insertedInterval = setInterval(() => {
    insertedCounter++
    insertedAnn.innerHTML = `${insertedCounter}`
    if(insertedCounter == INSERTED__VALUE) {
        clearInterval(insertedInterval)
    }
}, 1);

let completedAnn = document.querySelector("#completedAnn")
let completedCounter = 0
const COMPLETED__VALUE = 353
let completedInterval = setInterval(() => {
    completedCounter++
    completedAnn.innerHTML = `${completedCounter}`
    if(completedCounter == COMPLETED__VALUE) {
        clearInterval(completedInterval)
    }
}, 1);

let customerActive = document.querySelector("#customerActive")
let customerCounter = 0
const CUSTOMER__VALUE = 451
let activedInterval = setInterval(() => {
    customerCounter++
    customerActive.innerHTML = `${customerCounter}`
    if(customerCounter == CUSTOMER__VALUE) {
        clearInterval(activedInterval)
    }
}, 1);

let clientiActive = document.querySelector("#customer")
let clientiCounter = 0
const CLIENTI__VALUE = 451
let clientiInterval = setInterval(() => {
    clientiCounter++
    clientiActive.innerHTML = `${clientiCounter}`
    if(clientiCounter == CLIENTI__VALUE) {
        clearInterval(clientiInterval)
    }
}, 1);

let workCompleted = document.querySelector("#work")
let workCounter = 0
const WORK__VALUE = 543
let workInterval = setInterval(() => {
    workCounter++
    work.innerHTML = `${workCounter}`
    if(workCounter == WORK__VALUE) {
        clearInterval(workInterval)
    }
}, 1);