/**
Address editable input.
Internally value stored as {city: "Moscow", street: "Lenina", building: "15"}

@class address
@extends abstractinput
@final
@example
<a href="#" id="address" data-type="address" data-pk="1">awesome</a>
<script>
$(function(){
    $('#address').editable({
        url: '/post',
        title: 'Enter city, street and building #',
        value: {
            city: "Moscow", 
            street: "Lenina", 
            building: "15"
        }
    });
});
</script>
**/
(function ($) {
    "use strict";
    
    var Username = function (options) {
        this.init('username', options, Username.defaults);
    };

    //inherit from Abstract input
    $.fn.editableutils.inherit(Username, $.fn.editabletypes.abstractinput);

    $.extend(Username.prototype, {
        /**
        Renders input from tpl

        @method render() 
        **/        
        render: function() {
           this.$input = this.$tpl.find('input');
        },
        
        /**
        Default method to show value in element. Can be overwritten by display option.
        
        @method value2html(value, element) 
        **/
        value2html: function(value, element) {
            if(!value) {
                $(element).empty();
                return; 
            }
            var html = $('<div>').text(value.firstname).html() + ' ' + $('<div>').text(value.lastname).html(); //+ ' st., bld. ' + $('<div>').text(value.building).html();
            $(element).html(html); 
        },
        
        /**
        Gets value from element's html
        
        @method html2value(html) 
        **/        
        html2value: function(html) {        
          /*
            you may write parsing method to get value by element's html
            e.g. "Moscow, st. Lenina, bld. 15" => {city: "Moscow", street: "Lenina", building: "15"}
            but for complex structures it's not recommended.
            Better set value directly via javascript, e.g. 
            editable({
                value: {
                    city: "Moscow", 
                    street: "Lenina", 
                    building: "15"
                }
            });
          */ 
          return null;  
        },
      
       /**
        Converts value to string. 
        It is used in internal comparing (not for sending to server).
        
        @method value2str(value)  
       **/
       value2str: function(value) {
           var str = '';
           if(value) {
               for(var k in value) {
                   str = str + k + ':' + value[k] + ';';  
               }
           }
           return str;
       }, 
       
       /*
        Converts string to value. Used for reading value from 'data-value' attribute.
        
        @method str2value(str)  
       */
       str2value: function(str) {
           /*
           this is mainly for parsing value defined in data-value attribute. 
           If you will always set value by javascript, no need to overwrite it
           */
           return str;
       },                
       
       /**
        Sets value of input.
        
        @method value2input(value) 
        @param {mixed} value
       **/         
       value2input: function(value) {
           if(!value) {
             return;
           }
           this.$input.filter('[name="firstname"]').val(value.firstname);
           this.$input.filter('[name="lastname"]').val(value.lastname);
       },       
       
       /**
        Returns value of input.
        
        @method input2value() 
       **/          
       input2value: function() { 
           return {
              firstname: this.$input.filter('[name="firstname"]').val(), 
              lastname: this.$input.filter('[name="lastname"]').val(), 
           };
       },        
       
        /**
        Activates input: sets focus on the first field.
        
        @method activate() 
       **/        
       activate: function() {
            this.$input.filter('[name="firstname"]').focus();
       },  
       
       /**
        Attaches handler to submit form in case of 'showbuttons=false' mode
        
        @method autosubmit() 
       **/       
       autosubmit: function() {
           this.$input.keydown(function (e) {
                if (e.which === 13) {
                    $(this).closest('form').submit();
                }
           });
       }       
    });

    Username.defaults = $.extend({}, $.fn.editabletypes.abstractinput.defaults, {
        tpl: '<div class="editable-candidatename"><label><span>First Name: </span><input type="text" name="firstname" class="input-small"></label></div>'+
             '<div class="editable-candidatename"><label><span>Last Name: </span><input type="text" name="lastname" class="input-small"></label></div>',
        inputclass: ''
    });

    $.fn.editabletypes.username = Username;

}(window.jQuery));

(function ($) {
    "use strict";

    var PrimaryMobilenum = function (options) {
        this.sourceCountryData = options.Countrycode;
        this.init('primarymobilenum', options, PrimaryMobilenum.defaults);
    };

    //inherit from Abstract input
    $.fn.editableutils.inherit(PrimaryMobilenum, $.fn.editabletypes.abstractinput);

    $.extend(PrimaryMobilenum.prototype, {

        render: function () {
            this.$input = this.$tpl.find('input');
            this.$list = this.$tpl.find('select');

            this.$list.empty();

            var fillItems = function ($el, data) {
                if ($.isArray(data)) {
                    for (var i = 0; i < data.length; i++) {
                        if (data[i].children) {
                            $el.append(fillItems($('<optgroup>', {
                                label: data[i].text
                            }), data[i].children));
                        } else {
                            $el.append($('<option>', {
                                value: data[i].value
                            }).text(data[i].text));
                        }
                    }
                }
                return $el;
            };

            fillItems(this.$list, this.sourceCountryData);


        },

        value2html: function (value, element) {
            if (!value) {
                $(element).empty();
                return;
            }
            var countryText = value.countrycode;
            $.each(this.sourceCountryData, function (i, v) {
                if (v.value == countryText) {
                    countryText = v.value;
                }
            });
            var html = $('<div>').text(countryText).html() + '  ' + $('<div>').text(value.mobilenum).html();
            $(element).html(html);
        },

        html2value: function (html) {
            return null;
        },

        value2str: function (value) {
            var str = '';
            if (value) {
                for (var k in value) {
                    str = str + k + ':' + value[k] + ';';
                }
            }
            return str;
        },

        str2value: function (str) {
            return str;
        },

        value2input: function (value) {
            if (!value) {
                return;
            }
            this.$input.filter('[name="mobilenum"]').val(value.mobilenum);
            this.$list.val(value.countrycode);
        },

        input2value: function () {
            return {
                mobilenum: this.$input.filter('[name="mobilenum"]').val(),
                countrycode: this.$list.val()
            };
        },

        activate: function () {
            this.$input.filter('[name="mobilenum"]').focus();
        },

        autosubmit: function () {
            this.$input.keydown(function (e) {
                if (e.which === 13) {
                    $(this).closest('form').submit();
                }
            });
        }
    });

    PrimaryMobilenum.defaults = $.extend({}, $.fn.editabletypes.abstractinput.defaults, {
        tpl: '' +
            '<div class="editable-primarymobilenum">' +
              '<label><span>Country Code: </span><select name="countrycode"></select></label>' +
            '</div>' +
            '<div class="editable-primarymobilenum">' +
            '<label><span>Mobile: </span><input type="text" name="mobilenum" maxlength="10"></label>' +
            '</div>',

        inputclass: '',
        showbuttons: 'bottom', //WHY ISN'T THIS WORKING!!!
        Countrycode: []
    });

    $.fn.editabletypes.primarymobilenum = PrimaryMobilenum;

}(window.jQuery));