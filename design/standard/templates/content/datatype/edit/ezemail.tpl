{* DO NOT EDIT THIS FILE! Use an override template instead. *}
{default attribute_base=ContentObjectAttribute}
<input class="box" type="text" size="10" name="{$attribute_base}_data_text_{$attribute.id}" value="{$attribute.data_text|wash(xhtml)}" />
{/default}