import Vue from '../services/vue.min.js';
import 'he-tree-vue/dist/he-tree-vue.css'
import {Tree, Draggable} from 'he-tree-vue'
const axios = require('axios');

Vue.component('testcomponentchild',{
    created() {

      },
      data: function () {
        return {
          count: this.db_data
        }
      },
    template : '<div>test<Tree :value="count"></Tree></div>'
}); 

var customNavigation = new Vue({
    el: '#component_test',
    components: {Tree: Tree.mixPlugins([Draggable])},
    data: {
        show: true,
        menu_name: "Add menu items",
        new_nested_item: { text:"" },
        nestableItems: []
     },
    created() {
         this.getNavInfo();
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
      getNavInfo() {
         var test = axios.get('/settings/info')
            .then( response => {
              console.log( response.data);
              this.nestableItems = response.data;
          })
      },

    }
  });


  
export default customNavigation;