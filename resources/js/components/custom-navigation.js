import Vue from '../services/vue.min.js';
import 'he-tree-vue/dist/he-tree-vue.css'
import {Tree, Draggable} from 'he-tree-vue'
const axios = require('axios');

Vue.component("modal", {
  template: "#modal-template"
});

/**
 * Liberias:
 * For nav menu https://he-tree-vue.phphe.com/
*/

var customNavigation = new Vue({
    el: '#component_nav',
    components: {Tree: Tree.mixPlugins([Draggable])},
    data: {
        show: true,
        menu_name: "Add menu items",
        new_nested_item: { text:"" },
        nestableItems: [],
        showModal: false
     },
    created() {
      // initialize the nav menu
      this.getNavInfo();
    },
    methods:{
      // Add new nav menu to row
      addRow: function(){
          this.nestableItems.push({
              text: this.new_nested_item.text 
          });
      },
      // Edit nav row
      editRow: function(node, index, path, tree){

        console.log(this.nestableItems);
        console.log("node - " + node);
        console.log("index - " + index);
        console.log("path - " + path);
        console.log("tree - " + tree);
        //alert('edit' + e);
        //
      }, 
      // Remove nav row
      removeRow: function(e){
        alert('removeRow' + e);
        console.log(e);
        //console.log(row);
        //this.items.$remove(row);
      }, 
      // Get nav information from database
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