var ejemplo = new Vue({
  el: '#ejemplovue',
  data: {
    message: 'Hello Vue!',
    personas:[{}]
  },
  methods:{
      agregarFila: function(){
          this.personas.push({});
      }
  }
});