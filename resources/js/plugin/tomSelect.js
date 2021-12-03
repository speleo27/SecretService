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
