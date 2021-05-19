import Vue from '../services/vue.min.js';
import 'he-tree-vue/dist/he-tree-vue.css'
import {Tree, Draggable} from 'he-tree-vue'


  Vue.component('testcomponent',{
    template : '<div><h1>This is coming from component</h1></div>'
 }); 

var customNavigation = new Vue({
    el: '#component_test',
    components: {Tree: Tree.mixPlugins([Draggable])},
    data: {
        show: true,
        menu_name: "Add menu items",
        new_nested_item: { text:"" },
        nestableItems: [
            {text: 'Home'}
        ]
     },   
     methods:{
        addRow: function(){
            this.nestableItems.push({
                text: this.new_nested_item.text 
            });
        },
        removeRow: function(row){
          //console.log(row);
          //this.items.$remove(row);
        }, 
       // submitRows: function() {
       //     axios.post('/api/link/here', rows)
       //      .then( (response) => {
       //         console.log(response)
       //       this.rows.push({name:"",job:""});
       //     })
       // }
      }
  });


  
export default customNavigation;