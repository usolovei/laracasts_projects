webpackJsonp([0],{

/***/ 12:
/***/ function(module, exports, __webpack_require__) {

"use strict";
/* harmony default export */ exports["a"] = {
  template: '<h1>Hello World!</h1>'
};

/***/ },

/***/ 13:
/***/ function(module, exports, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_axios__ = __webpack_require__(1);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_axios___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_axios__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__Errors__ = __webpack_require__(31);
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }




var Form = /*#__PURE__*/function () {
  function Form(data) {
    _classCallCheck(this, Form);

    this.originalData = data;

    for (var field in data) {
      if (data.hasOwnProperty(field)) {
        this[field] = data[field];
      }
    }

    this.errors = new __WEBPACK_IMPORTED_MODULE_1__Errors__["a" /* default */]();
  }

  _createClass(Form, [{
    key: "data",
    value: function data() {
      var data = {};

      for (var property in this.originalData) {
        if (this.originalData.hasOwnProperty(property)) {
          data[property] = this[property];
        }
      }

      return data;
    }
  }, {
    key: "reset",
    value: function reset() {
      for (var field in this.originalData) {
        if (this.originalData.hasOwnProperty(field)) {
          this[field] = '';
        }
      }

      this.errors.clear();
    }
  }, {
    key: "post",
    value: function post(url) {
      return this.submit('POST', url);
    }
  }, {
    key: "delete",
    value: function _delete(url) {
      return this.submit('DELETE', url);
    }
  }, {
    key: "submit",
    value: function submit(requestType, url) {
      var _this = this;

      return new Promise(function (resolve, reject) {
        __WEBPACK_IMPORTED_MODULE_0_axios___default.a[requestType](url, _this.data()).then(function (response) {
          _this.onSuccess(response.data);

          resolve(response.data);
        })["catch"](function (error) {
          _this.onFail(error.response.data);

          reject(error.response.data);
        });
      });
    }
  }, {
    key: "onSuccess",
    value: function onSuccess(data) {
      alert(data.message);
      this.reset();
    }
  }, {
    key: "onFail",
    value: function onFail(errors) {
      this.errors.record(errors);
    }
  }]);

  return Form;
}();

/* harmony default export */ exports["a"] = Form;

/***/ },

/***/ 31:
/***/ function(module, exports, __webpack_require__) {

"use strict";
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Errors = /*#__PURE__*/function () {
  function Errors() {
    _classCallCheck(this, Errors);

    this.errors = {};
  }

  _createClass(Errors, [{
    key: "has",
    value: function has(field) {
      return this.errors.hasOwnProperty(field);
    }
  }, {
    key: "any",
    value: function any() {
      return Object.keys(this.errors).length > 0;
    }
  }, {
    key: "get",
    value: function get(field) {
      if (this.errors[field]) {
        return this.errors[field][0];
      }
    }
  }, {
    key: "record",
    value: function record(errors) {
      this.errors = errors.errors;
    }
  }, {
    key: "clear",
    value: function clear(field) {
      if (field) {
        delete this.errors[field];
        return;
      }

      this.errors = {};
    }
  }]);

  return Errors;
}();

/* harmony default export */ exports["a"] = Errors;

/***/ },

/***/ 35:
/***/ function(module, exports, __webpack_require__) {

"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vue__ = __webpack_require__(3);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vue___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_vue__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_axios__ = __webpack_require__(1);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_axios___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1_axios__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__core_Form__ = __webpack_require__(13);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__components_Example__ = __webpack_require__(12);




window.axios = __WEBPACK_IMPORTED_MODULE_1_axios___default.a;
window.Form = __WEBPACK_IMPORTED_MODULE_2__core_Form__["a" /* default */];
new __WEBPACK_IMPORTED_MODULE_0_vue___default.a({
  el: '#app',
  components: {
    Example: __WEBPACK_IMPORTED_MODULE_3__components_Example__["a" /* default */]
  },
  data: {
    form: new __WEBPACK_IMPORTED_MODULE_2__core_Form__["a" /* default */]({
      title: '',
      description: ''
    })
  },
  methods: {
    onSubmit: function onSubmit() {
      this.form.submit('post', '/projects').then(function (data) {
        return console.log(data);
      })["catch"](function (errors) {
        return console.log(errors);
      });
    }
  }
});

/***/ }

},[35]);