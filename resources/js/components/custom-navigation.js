import Vue from '../services/vue.min.js';
import 'he-tree-vue/dist/he-tree-vue.css'
import {Tree, Draggable} from 'he-tree-vue'
const axios = require('axios');

Vue.component("modal", {
  props:{
    initialdata:String
  },
  data() {
    return {
      date: '',
    };
  },
  create(){
   // console.log(this);
  },
  methods: {
    //
  },
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
        date: '',
        show: true,
        nav_node: '',
        new_nested_item: { 
          text:"", 
          url:"" 
        },
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
              text: this.new_nested_item.text,
              url: this.new_nested_item.url 
          });
      },
      // Edit nav row
      editRow: function(node, index, path, tree){
        this.nav_node = node;
        this.showModal = true;
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
      updateTaskEdit($event) {
        alert(8888888)
        console.log($event);
      }
    }
  });

export default customNavigation;