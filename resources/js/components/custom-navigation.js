import Vue from '../services/vue.min.js';

Vue.component('testcomponent',{
    template : '<div><h1>This is coming from component</h1></div>'
 });

var customNavigation = new Vue({
    el: '#component_test',
    data: {
        show: false,
        styleobj: {
           backgroundColor: '#2196F3!important',
           cursor: 'pointer',
           padding: '8px 16px',
           verticalAlign: 'middle',
        }
     },
     methods : {
        showdata : function() {
           this.show = !this.show;
        }
     },

  })


export default customNavigation;