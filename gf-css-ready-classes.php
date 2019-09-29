<?php
/* --------------------------------------------------
Plugin Name: Gravity CSS Ready Classes Picker
Plugin URI: https://endurtech.com/gravity-forms-css-ready-classes-plugin
Description: Show and select Gravity Forms CSS Ready Classes from within your form field appearence tab.
Version: 2.4.2
Author: Manny Rodrigues
Author URI: https://endurtech.com/
Requires WP: 5.0+
Tested up to: 5.2.3
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
-------------------------------------------------- */

if( ! defined( 'ABSPATH' ) )
{
  exit(); // No direct access
}

add_action( 'gform_editor_js', 'render_editor_js' );
function render_editor_js()
{
  $modal_html = "<style>
  #css_ready_selector, .cssr_ul li span, a.cssr_link {
    text-decoration:none;
  }
  #css_ready_selector {
    display:inline-block;
  }
  #css_ready_modal h4 {
    margin-bottom:2px;
  }
  .cssr_ul {
    margin:10px 0 0;
    padding:0;
  }
  .cssr_ul li {
    margin:2px 2px 15px;
    padding:0;
  }
  .cssr_ul li span {
    font-weight:700;
    display:block;
    text-align:left;
    color:#47759B;
  }
  .cssr_ul li div {
    display:-ms-flexbox;
    display:-webkit-box;
    display:flex;
    -ms-flex-direction:row;
    -webkit-box-orient:horizontal;
    -webkit-box-direction:normal;
    flex-direction:row;
    -ms-flex-wrap:wrap;
    flex-wrap:wrap;
    -ms-flex-pack:center;
    -webkit-box-pack:center;
    justify-content:center;
    -ms-flex-line-pack:justify;
    align-content:space-between;
    -ms-flex-align:center;
    -webkit-box-align:center;
    align-items:center;
    margin:5px 0;
  }
  a.cssr_link {
    display:inline-block;
    -ms-flex-order:0;
    -webkit-box-ordinal-group:1;
    order:0;-ms-flex:1 0 auto;
    -webkit-box-flex:1;
    flex:1 0 auto;
    -ms-flex-item-align:stretch;
    align-self:stretch;
    margin-right:5px;
    margin-bottom:5px;
    padding:5px 10px 0px;
    height:24px;
    background:#f7f7f7;
    border:1px solid #dfdfdf;
    border-radius:3px;
    box-shadow:0 1px 0 #ccc;
    text-align:center;
    color:#555;
  }
  a.cssr_link:hover {
    background:#fafafa;
    border-color:#ccc;
    color:#d54e21;
  }
  a.cssr_link:active {
    background:#eee;
    border-color:#bbb;
    color:#5555;
  }
  </style>
  <div id='css_ready_modal'>
    <p>Click to add any <a href='https://docs.gravityforms.com/css-ready-classes/' target='_blank' title='Opens New Window.'>CSS ready class</a>. Double-clicking adds the class and closes popup.<br />
    Did <a href='https://endurtech.com/gravity-forms-css-ready-classes-plugin/' target='_blank' title='Opens New Window'>our plugin</a> save you time? <a href='https://paypal.me/endurtechnology/5' target='_blank' title='Opens New Window'><strong>Share your appreciation</strong></a> and support future improvements.</p>
    <ul class='cssr_ul'>
      <li>
        <span>Columns</span>
        <div>
          <a class='cssr_link' href='#' rel='gf_left_half' title='Puts field on left. Top Label form layout required.'>Left Half</a>
          <a class='cssr_link' href='#' rel='gf_right_half' title='Puts field on right. Top Label form layout required.'>Right Half</a>
        </div>
        <div>
          <a class='cssr_link' href='#' rel='gf_left_third' title='Puts field on left. Top Label form layout required.'>Left Third</a>
          <a class='cssr_link' href='#' rel='gf_middle_third' title='Puts field on middle. Top Label form layout required.'>Middle Third</a>
          <a class='cssr_link' href='#' rel='gf_right_third' title='Puts field on right. Top Label form layout required.'>Right Third</a>
        </div>
        <div>
          <a class='cssr_link' href='#' rel='gf_first_quarter' title='Puts field on 1st 25%. Top Label form layout required.'>1 Quarter</a>
          <a class='cssr_link' href='#' rel='gf_second_quarter' title='Puts field on 2nd 25%. Top Label form layout required.'>2 Quarter</a>
          <a class='cssr_link' href='#' rel='gf_third_quarter' title='Puts field on 3rd 25%. Top Label form layout required.'>3 Quarter</a>
          <a class='cssr_link' href='#' rel='gf_fourth_quarter' title='Puts field on 4th 25%. Top Label form layout required.'>4 Quarter</a>
        </div>
      </li>      
      <li>
        <span>Lists</span>
        <div>
          <a class='cssr_link' href='#' rel='gf_list_2col' title='Equally-spaced 2 col multi-choice/checkboxs. Any form label.'>2 Column List</a>
          <a class='cssr_link' href='#' rel='gf_list_3col' title='Equally-spaced 3 col multi-choice/checkboxs. Any form label.'>3 Column List</a>
          <a class='cssr_link' href='#' rel='gf_list_4col' title='Equally-spaced 4 col multi-choice/checkboxs. Any form label.'>4 Column List</a>
          <a class='cssr_link' href='#' rel='gf_list_5col' title='Equally-spaced 5 col multi-choice/checkboxs. Any form label.'>5 Column List</a>
        </div>
        <div>
          <a class='cssr_link' href='#' rel='gf_list_2col_vertical' title='Equally-spaced 2 col vertical multi-choice/checkboxs. Any form label.'>2 Col Vertical</a>
          <a class='cssr_link' href='#' rel='gf_list_3col_vertical' title='Equally-spaced 3 col vertical multi-choice/checkboxs. Any form label.'>3 Col Vertical</a>
          <a class='cssr_link' href='#' rel='gf_list_4col_vertical' title='Equally-spaced 4 col vertical multi-choice/checkboxs. Any form label.'>4 Col Vertical</a>
          <a class='cssr_link' href='#' rel='gf_list_5col_vertical' title='Equally-spaced 5 col vertical multi-choice/checkboxs. Any form label.'>5 Col Vertical</a>
        </div>

        <div>
          <a class='cssr_link' href='#' rel='gf_list_inline' title='Inline horizontal multi-choice/checkboxs, not = spaced. Any form label.'>Inline List</a>
          <a class='cssr_link' href='#' rel='gf_list_height_25' title='25px height multi-choice/checkboxs. Any form label.'>25px Height</a>
          <a class='cssr_link' href='#' rel='gf_list_height_50' title='50px height multi-choice/checkboxs. Any form label.'>50px Height</a>
          <a class='cssr_link' href='#' rel='gf_list_height_75' title='75px height multi-choice/checkboxs. Any form label.'>75px Height</a>
        </div>
        <div>
          <a class='cssr_link' href='#' rel='gf_list_height_100' title='100px height multi-choice/checkboxs. Any form label.'>100px Height</a>
          <a class='cssr_link' href='#' rel='gf_list_height_125' title='125px height multi-choice/checkboxs. Any form label.'>125px Height</a>
          <a class='cssr_link' href='#' rel='gf_list_height_150' title='150px height multi-choice/checkboxs. Any form label.'>150px Height</a>
        </div>
      </li>
      <li>
        <span>Others</span>
        <div>
          <a class='cssr_link' href='#' rel='gf_invisible' title='Hides ANY field type. Better than hidden fields, allows formatting for specific type of data'>Invisible</a>
          <a class='cssr_link' href='#' rel='gf_inline' title='Puts field(s) inline, not = spaced. Useful for different sized fields or horizontal layout without column spacing.'>Inline Fields</a>
          <a class='cssr_link' href='#' rel='gf_simple_horizontal' title='Simple horizontal form. Use placeholder label hidden, large input. Up to 5 fields and button. Top Label layout required.'>Simple Horizontal</a>
          <a class='cssr_link' href='#' rel='gf_section_right' title='Section Break aligns right with form fields if left/right label form setting enabled.'>Section Right</a>
        </div>
        <div>
          <a class='cssr_link' href='#' rel='gf_hide_ampm' title='Hides time field am/pm. Still appears in form entry. Any form label.'>Hide Time am/pm</a>
          <a class='cssr_link' href='#' rel='gf_hide_charleft' title='Hides Maximum Characters Left on paragraph/text fields. Any form label.'>Hide Character Counter</a>
          <a class='cssr_link' href='#' rel='gf_scroll_text' title='Converts Section Break into fixed height box. Shows scroll bar if overflow. Only works on Section Breaks. Any form label.'>Scrolling Paragraph Text</a>
        </div>
      </li>
    </ul>
  </div>";
?>
<script>
function removeTokenFromInput( input, tokenPos, seperator )
{
  var text = input.val();
  var tokens = text.split( seperator );
  var newText = '';
  for( i = 0; i < tokens.length; i++ )
  {
    if( tokens[i].replace( ' ', '' ).replace( seperator, '' ) == '' )
    {
      continue;
    }
    if( i != tokenPos )
    {
      newText += ( tokens[i].trim() + seperator );
    }
  }
  input.val( fixTokens( newText, seperator ) );
}
function addTokenToInput( input, tokenToAdd, seperator )
{
  var text = input.val().trim();
  if( text == '' )
  {
    input.val( tokenToAdd );
  }
  else
  {
    if( ! tokenExists( input, tokenToAdd, seperator ) )
    {
      input.val( fixTokens( text + seperator + tokenToAdd, seperator ) );
    }
  }
}
function fixTokens( tokens, seperator )
{
  var text = tokens.trim();
  var tokens = text.split( seperator );
  var newTokens = '';
  for( i = 0; i < tokens.length; i++ )
  {
    var token = tokens[i].trim().replace( seperator, '' );
    if( token == '' )
    {
      continue;
    }
    newTokens += ( token + seperator );
  }
  return newTokens;
}
function tokenExists( input, tokenToCheck, seperator )
{
  var text = input.val().trim();
  if( text == '' )
  {
    return false;
  }
  var tokens = text.split( seperator );
  for( i = 0; i < tokens.length; i++ )
  {
    var token = tokens[i].trim().replace( seperator, '' );
    if( token == '' )
    {
      continue;
    }
    if( token == tokenToCheck )
    {
      return true;
    }
  }
  return false;
}
jQuery( document ).bind( "gform_load_field_settings", function( event, field, form )
{
  if( jQuery( "#css_ready_selector" ).length == 0 )
  {
    //add some html after the CSS Class Name input
    var $select_link = jQuery( "<a id='css_ready_selector' class='thickbox' href='#TB_inline?width=500&height=550&inlineId=css_ready_modal' title='Pick a CSS Ready Class'>CSS</a>" );
    var $modal = jQuery( "<?php echo preg_replace( '/\s*[\r\n\t]+\s*/', '', $modal_html ); ?>" ).hide();
    jQuery( ".css_class_setting" ).append( $select_link ).append( $modal );
    $select_link.click( function( e )
    {
      e.preventDefault();
      var $m = jQuery( "#css_ready_modal" );
      var $links = $m.find(".cssr_link" );
      $links.unbind( "click" ).click( function( e )
      {
        e.preventDefault();
        var css = jQuery( this ).attr( "rel" );
        addTokenToInput( jQuery( "#field_css_class" ), css, ' ' );
        SetFieldProperty( 'cssClass', jQuery( "#field_css_class" ).val().trim() );
      } );
      $links.unbind( "dblclick" ).dblclick( function( e )
      {
        e.preventDefault();
        var css = jQuery( this ).attr( "rel" );
        addTokenToInput( jQuery( "#field_css_class" ), css, ' ' );
        SetFieldProperty( 'cssClass', jQuery( "#field_css_class" ).val().trim() );
        tb_remove();
      } );
      tb_show( 'Pick a CSS Ready Class', this.href, false );
    } );
  }
} );
</script>
<?php
}