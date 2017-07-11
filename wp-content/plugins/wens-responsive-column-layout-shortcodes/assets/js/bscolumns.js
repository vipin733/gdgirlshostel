(function() {
    tinymce.create('tinymce.plugins.WENbscolumns', {
        init : function(ed, url) {
            ed.addButton('bscolumns-button', {
                title : "eVision Responsive Columns",
                cmd : 'bscolumns-button',
                image : url + '/../img/bscolumns.png'                
            });

            ed.addCommand('bscolumns-button', function() {
                var number = prompt("How many columns do you want to show ( max 6) ? ") ,
                    shortcode;
                number = number.replace(/\s+/g, '');
                if (number !== null) {
                    switch(number) {
                            case '1/6+1/6+1/6+1/6+1/6+1/6':
                            case '6':
                                shortcode  = '[bscolumns class="one_sixth"]Your Content Goes here[/bscolumns]';
                                shortcode += '[bscolumns class="one_sixth"]Your Content Goes here[/bscolumns]';
                                shortcode += '[bscolumns class="one_sixth"]Your Content Goes here[/bscolumns]';
                                shortcode += '[bscolumns class="one_sixth"]Your Content Goes here[/bscolumns]';
                                shortcode += '[bscolumns class="one_sixth"]Your Content Goes here[/bscolumns]';
                                shortcode += '[bscolumns class="one_sixth_last"]Your Content Goes here[/bscolumns]';
                                shortcode += '[bscolumns class="clear"][/bscolumns]';
                            break;

                            case '1/5+1/5+1/5+1/5+1/5':
                            case '5':
                                shortcode  = '[bscolumns class="one_fifth"]Your Content Goes here[/bscolumns]';
                                shortcode += '[bscolumns class="one_fifth"]Your Content Goes here[/bscolumns]';
                                shortcode += '[bscolumns class="one_fifth"]Your Content Goes here[/bscolumns]';
                                shortcode += '[bscolumns class="one_fifth"]Your Content Goes here[/bscolumns]';
                                shortcode += '[bscolumns class="one_fifth_last"]Your Content Goes here[/bscolumns]';
                                shortcode += '[bscolumns class="clear"][/bscolumns]';
                            break;
                            
                            case '1/4+1/4+1/4+1/4':
                            case '4':
                                shortcode  = '[bscolumns class="one_fourth"]Your Content Goes here[/bscolumns]';
                                shortcode += '[bscolumns class="one_fourth"]Your Content Goes here[/bscolumns]';
                                shortcode += '[bscolumns class="one_fourth"]Your Content Goes here[/bscolumns]';
                                shortcode += '[bscolumns class="one_fourth_last"]Your Content Goes here[/bscolumns]';
                                shortcode += '[bscolumns class="clear"][/bscolumns]';
                            break;

                            case '1/3+1/3+1/3':
                            case '3':
                                shortcode  = '[bscolumns class="one_third"]Your Content Goes here[/bscolumns]';
                                shortcode += '[bscolumns class="one_third"]Your Content Goes here[/bscolumns]';
                                shortcode += '[bscolumns class="one_third_last"]Your Content Goes here[/bscolumns]';
                                shortcode += '[bscolumns class="clear"][/bscolumns]';
                            break;

                            case '1/2+1/2':
                            case '2':
                                shortcode  = '[bscolumns class="one_half"]Your Content Goes here[/bscolumns]';
                                shortcode += '[bscolumns class="one_half_last_clear"]Your Content Goes here[/bscolumns]';
                                shortcode += '[bscolumns class="clear"][/bscolumns]';
                            break;

                            case '2/3+1/3':
                                shortcode  = '[bscolumns class="two_third"]Your Content Goes here[/bscolumns]';
                                shortcode += '[bscolumns class="one_third_last_clear"]Your Content Goes here[/bscolumns]';
                                shortcode += '[bscolumns class="clear"][/bscolumns]';
                            break;

                            case '1/3+2/3':
                                shortcode  = '[bscolumns class="one_third"]Your Content Goes here[/bscolumns]';
                                shortcode += '[bscolumns class="two_third_last_clear"]Your Content Goes here[/bscolumns]';
                                shortcode += '[bscolumns class="clear"][/bscolumns]';
                            break;

                            case '1':
                            default:
                                shortcode = '[bscolumns]Your Content Goes here[/bscolumns]';
                            break;
                        }                        
                        ed.execCommand('mceInsertContent', 0, shortcode);
                }
            });
        },

        createControl : function(n, cm) {
            return null;
        },

        getInfo : function() {
            return {
                longname : "evision's Responsive Columns",
                author : 'eVision',
                authorurl : 'http://eaglevisionit.com/',
                infourl : 'http://eaglevisionit.com/',
                version : "2.0.1.3"
            };
        }
    });
    tinymce.PluginManager.add( 'bscolumns', tinymce.plugins.WENbscolumns );
})();