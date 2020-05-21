// Shared state 101 example

let store = {
  user: {
      name: 'John Doe'
  }
};

new Vue({

    el: '#one',

    data: {
        foo: 'other bar',
        shared: store
    }

});

new Vue({

    el: '#two',

    data: {
        foo: 'bar',
        shared: store
    }

});

