import Vue from '../services/vue.min.js';
import nestedSort from 'nested-sort';
import VueNestable from 'vue-nestable';

Vue.use(VueNestable);

  Vue.component('testcomponent',{
    template : '<div><h1>This is coming from component</h1></div>'
 });

var customNavigation = new Vue({
    el: '#component_test',
    data: {
        show: true,
        menu_name: "SideBarMenu",
        styleobj: {
           backgroundColor: '#2196F3!important',
           cursor: 'pointer',
           padding: '8px 16px',
           verticalAlign: 'middle',
        },
        new_nested_item: { id:"", text:"" },
        nestableItems: [
            {
              id: 0,
              text: 'Home'
            }
          ]
     },   
     methods:{
        addRow: function(){
            this.nestableItems.push({
                id: this.uniqId(),
                text: this.new_nested_item.text 
            });
        },
        // Make UUID
        uniqId: function(length = 4) {
            let alp =
            "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
            let rtn = "";
    
            for (let i = 0; i < length; i++) {
            rtn += alp.charAt(Math.floor(Math.random() * alp.length));
            }
    
            return rtn;
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