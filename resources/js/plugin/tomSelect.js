import TomSelect from "tom-select";
const targets=document.querySelector("#target");
var tsTarget =new TomSelect("#target",configTarget);

var configTarget={
    plugins:['remove_button'],
    render:{},
    sortField: {
        field: 'text',
        direction: 'asc'
    },
        onItemAdd:()=>{},
    onItemRemove:()=>{},
}

const contacts= document.querySelector("#contact");
var tsContact= new TomSelect("#contact", configContact);

var configContact={
    plugins:['remove_button'],
    render:{},
    sortField: {
        field: 'text',
        direction: 'asc'
    },
    onItemAdd:()=>{},
    onItemRemove:()=>{},
}
const agents= document.querySelector("#agent");
var tsAgent= new TomSelect("#agent", configAgent);

var configAgent={
    plugins:['remove_button'],
    render:{},
    sortField: {
        field: 'text',
        direction: 'asc'
    },
    onItemAdd:()=>{},
    onItemRemove:()=>{},
}

const safeHouses=document.querySelector("#safeHouse");
var tsSafehouse= new TomSelect("#safehouse", configSafehouse);

var configSafehouse={
    plugins:['remove_button'],
    render:{},
    sortField: {
        field: 'text',
        direction: 'asc'
    },
    onItemAdd:()=>{},
    onItemRemove:()=>{},
}
