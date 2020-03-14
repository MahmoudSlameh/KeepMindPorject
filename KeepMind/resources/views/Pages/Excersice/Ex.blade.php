@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{asset('css/Excercise/style.css')}}">
@endsection


@section('content')
    <table width="100%" height="100%">
        <tr>
            <td>
                <h1><a href="https://developers.google.com/blockly/">Blockly</a>&rlm; &gt;
                    <a href="">Demos</a>&rlm; &gt;
                    <span id="title">...</span>
                </h1>
            </td>
            <td class="farSide">
                <select id="languageMenu"></select>
            </td>
        </tr>
        <tr>
            <td colspan=2>
                <table width="100%">
                    <tr id="tabRow" height="1em">
                        <td id="tab_blocks" class="tabon">...</td>
                        <td class="tabmin tab_collapse">&nbsp;</td>
                        <td id="tab_javascript" class="taboff tab_collapse">JavaScript</td>
                        <td class="tabmin tab_collapse">&nbsp;</td>
                        <td id="tab_python" class="taboff tab_collapse">Python</td>
                        <td class="tabmin tab_collapse">&nbsp;</td>
                        <td id="tab_php" class="taboff tab_collapse">PHP</td>
                        <td class="tabmin tab_collapse">&nbsp;</td>
                        <td id="tab_lua" class="taboff tab_collapse">Lua</td>
                        <td class="tabmin tab_collapse">&nbsp;</td>
                        <td id="tab_dart" class="taboff tab_collapse">Dart</td>
                        <td class="tabmin tab_collapse">&nbsp;</td>
                        <td id="tab_xml" class="taboff tab_collapse">XML</td>
                        <td class="tabmin">&nbsp;</td>
                        <td id="tab_code" class="taboff">
                            <select id="code_menu"></select>
                        </td>
                        <td class="tabmax">
                            <button id="trashButton" class="notext" title="...">
                                <img src='{{asset('js/Blockly/media/1x1.gif')}}' class="trash icon21">
                            </button>
                            <button id="linkButton" class="notext" title="...">
                                <img src='{{asset('js/Blockly/media/1x1.gif')}}' class="link icon21">
                            </button>
                            <button id="runButton" class="notext primary" title="...">
                                <img src='{{asset('js/Blockly/media/1x1.gif')}}' class="run icon21">
                            </button>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td height="99%" colspan=2 id="content_area">
            </td>
        </tr>
    </table>
    <div id="content_blocks" class="content"></div>
    <pre id="content_javascript" class="content prettyprint lang-js"></pre>
    <pre id="content_python" class="content prettyprint lang-py"></pre>
    <pre id="content_php" class="content prettyprint lang-php"></pre>
    <pre id="content_lua" class="content prettyprint lang-lua"></pre>
    <pre id="content_dart" class="content prettyprint lang-dart"></pre>
    <textarea id="content_xml" class="content" wrap="off"></textarea>
    <xml id="toolbox" style="display: none">
        <category name="%{BKY_CATLOGIC}" colour="%{BKY_LOGIC_HUE}">
            <block type="controls_if"></block>
            <block type="logic_compare"></block>
            <block type="logic_operation"></block>
            <block type="logic_negate"></block>
            <block type="logic_boolean"></block>
            <block type="logic_null"></block>
            <block type="logic_ternary"></block>
        </category>
        <category name="%{BKY_CATLOOPS}" colour="%{BKY_LOOPS_HUE}">
            <block type="controls_repeat_ext">
                <value name="TIMES">
                    <shadow type="math_number">
                        <field name="NUM">10</field>
                    </shadow>
                </value>
            </block>
            <block type="controls_whileUntil"></block>
            <block type="controls_for">
                <value name="FROM">
                    <shadow type="math_number">
                        <field name="NUM">1</field>
                    </shadow>
                </value>
                <value name="TO">
                    <shadow type="math_number">
                        <field name="NUM">10</field>
                    </shadow>
                </value>
                <value name="BY">
                    <shadow type="math_number">
                        <field name="NUM">1</field>
                    </shadow>
                </value>
            </block>
            <block type="controls_forEach"></block>
            <block type="controls_flow_statements"></block>
        </category>
        <category name="%{BKY_CATMATH}" colour="%{BKY_MATH_HUE}">
            <block type="math_number">
                <field name="NUM">123</field>
            </block>
            <block type="math_arithmetic">
                <value name="A">
                    <shadow type="math_number">
                        <field name="NUM">1</field>
                    </shadow>
                </value>
                <value name="B">
                    <shadow type="math_number">
                        <field name="NUM">1</field>
                    </shadow>
                </value>
            </block>
            <block type="math_single">
                <value name="NUM">
                    <shadow type="math_number">
                        <field name="NUM">9</field>
                    </shadow>
                </value>
            </block>
            <block type="math_trig">
                <value name="NUM">
                    <shadow type="math_number">
                        <field name="NUM">45</field>
                    </shadow>
                </value>
            </block>
            <block type="math_constant"></block>
            <block type="math_number_property">
                <value name="NUMBER_TO_CHECK">
                    <shadow type="math_number">
                        <field name="NUM">0</field>
                    </shadow>
                </value>
            </block>
            <block type="math_round">
                <value name="NUM">
                    <shadow type="math_number">
                        <field name="NUM">3.1</field>
                    </shadow>
                </value>
            </block>
            <block type="math_on_list"></block>
            <block type="math_modulo">
                <value name="DIVIDEND">
                    <shadow type="math_number">
                        <field name="NUM">64</field>
                    </shadow>
                </value>
                <value name="DIVISOR">
                    <shadow type="math_number">
                        <field name="NUM">10</field>
                    </shadow>
                </value>
            </block>
            <block type="math_constrain">
                <value name="VALUE">
                    <shadow type="math_number">
                        <field name="NUM">50</field>
                    </shadow>
                </value>
                <value name="LOW">
                    <shadow type="math_number">
                        <field name="NUM">1</field>
                    </shadow>
                </value>
                <value name="HIGH">
                    <shadow type="math_number">
                        <field name="NUM">100</field>
                    </shadow>
                </value>
            </block>
            <block type="math_random_int">
                <value name="FROM">
                    <shadow type="math_number">
                        <field name="NUM">1</field>
                    </shadow>
                </value>
                <value name="TO">
                    <shadow type="math_number">
                        <field name="NUM">100</field>
                    </shadow>
                </value>
            </block>
            <block type="math_random_float"></block>
            <block type="math_atan2">
                <value name="X">
                    <shadow type="math_number">
                        <field name="NUM">1</field>
                    </shadow>
                </value>
                <value name="Y">
                    <shadow type="math_number">
                        <field name="NUM">1</field>
                    </shadow>
                </value>
            </block>
        </category>
        <category name="%{BKY_CATTEXT}" colour="%{BKY_TEXTS_HUE}">
            <block type="text"></block>
            <block type="text_join"></block>
            <block type="text_append">
                <value name="TEXT">
                    <shadow type="text"></shadow>
                </value>
            </block>
            <block type="text_length">
                <value name="VALUE">
                    <shadow type="text">
                        <field name="TEXT">abc</field>
                    </shadow>
                </value>
            </block>
            <block type="text_isEmpty">
                <value name="VALUE">
                    <shadow type="text">
                        <field name="TEXT"></field>
                    </shadow>
                </value>
            </block>
            <block type="text_indexOf">
                <value name="VALUE">
                    <block type="variables_get">
                        <field name="VAR">{textVariable}</field>
                    </block>
                </value>
                <value name="FIND">
                    <shadow type="text">
                        <field name="TEXT">abc</field>
                    </shadow>
                </value>
            </block>
            <block type="text_charAt">
                <value name="VALUE">
                    <block type="variables_get">
                        <field name="VAR">{textVariable}</field>
                    </block>
                </value>
            </block>
            <block type="text_getSubstring">
                <value name="STRING">
                    <block type="variables_get">
                        <field name="VAR">{textVariable}</field>
                    </block>
                </value>
            </block>
            <block type="text_changeCase">
                <value name="TEXT">
                    <shadow type="text">
                        <field name="TEXT">abc</field>
                    </shadow>
                </value>
            </block>
            <block type="text_trim">
                <value name="TEXT">
                    <shadow type="text">
                        <field name="TEXT">abc</field>
                    </shadow>
                </value>
            </block>
            <block type="text_print">
                <value name="TEXT">
                    <shadow type="text">
                        <field name="TEXT">abc</field>
                    </shadow>
                </value>
            </block>
            <block type="text_prompt_ext">
                <value name="TEXT">
                    <shadow type="text">
                        <field name="TEXT">abc</field>
                    </shadow>
                </value>
            </block>
        </category>
        <category name="%{BKY_CATLISTS}" colour="%{BKY_LISTS_HUE}">
            <block type="lists_create_with">
                <mutation items="0"></mutation>
            </block>
            <block type="lists_create_with"></block>
            <block type="lists_repeat">
                <value name="NUM">
                    <shadow type="math_number">
                        <field name="NUM">5</field>
                    </shadow>
                </value>
            </block>
            <block type="lists_length"></block>
            <block type="lists_isEmpty"></block>
            <block type="lists_indexOf">
                <value name="VALUE">
                    <block type="variables_get">
                        <field name="VAR">{listVariable}</field>
                    </block>
                </value>
            </block>
            <block type="lists_getIndex">
                <value name="VALUE">
                    <block type="variables_get">
                        <field name="VAR">{listVariable}</field>
                    </block>
                </value>
            </block>
            <block type="lists_setIndex">
                <value name="LIST">
                    <block type="variables_get">
                        <field name="VAR">{listVariable}</field>
                    </block>
                </value>
            </block>
            <block type="lists_getSublist">
                <value name="LIST">
                    <block type="variables_get">
                        <field name="VAR">{listVariable}</field>
                    </block>
                </value>
            </block>
            <block type="lists_split">
                <value name="DELIM">
                    <shadow type="text">
                        <field name="TEXT">,</field>
                    </shadow>
                </value>
            </block>
            <block type="lists_sort"></block>
        </category>
        <category name="%{BKY_CATCOLOUR}" colour="%{BKY_COLOUR_HUE}">
            <block type="colour_picker"></block>
            <block type="colour_random"></block>
            <block type="colour_rgb">
                <value name="RED">
                    <shadow type="math_number">
                        <field name="NUM">100</field>
                    </shadow>
                </value>
                <value name="GREEN">
                    <shadow type="math_number">
                        <field name="NUM">50</field>
                    </shadow>
                </value>
                <value name="BLUE">
                    <shadow type="math_number">
                        <field name="NUM">0</field>
                    </shadow>
                </value>
            </block>
            <block type="colour_blend">
                <value name="COLOUR1">
                    <shadow type="colour_picker">
                        <field name="COLOUR">#ff0000</field>
                    </shadow>
                </value>
                <value name="COLOUR2">
                    <shadow type="colour_picker">
                        <field name="COLOUR">#3333ff</field>
                    </shadow>
                </value>
                <value name="RATIO">
                    <shadow type="math_number">
                        <field name="NUM">0.5</field>
                    </shadow>
                </value>
            </block>
        </category>
        <sep></sep>
        <category name="%{BKY_CATVARIABLES}" colour="%{BKY_VARIABLES_HUE}" custom="VARIABLE"></category>
        <category name="%{BKY_CATFUNCTIONS}" colour="%{BKY_PROCEDURES_HUE}" custom="PROCEDURE"></category>
    </xml>
    <xml id="startBlocks">
        <variables>
            <variable id="wlvORpAvna0Bv*tGaL40">n</variable>
            <variable id="1:JKULK%uIgWntQo)0fU">j</variable>
            <variable id="}CM|})6CS_}s#ZCV%@[R">sum</variable>
        </variables>
        <block type="procedures_defreturn" id="5hetKkkr!`udq#EJZ[WN" x="138" y="113">
            <mutation>
                <arg name="n" varid="wlvORpAvna0Bv*tGaL40"/>
            </mutation>
            <field name="NAME">do something</field>
            <comment pinned="false" h="80" w="160">Describe this function...</comment>
            <statement name="STACK">
                <block type="variables_set" id="5t^jDnZh,bQ8VJ),7`3`">
                    <field name="VAR" id="1:JKULK%uIgWntQo)0fU">j</field>
                    <value name="VALUE">
                        <block type="math_number" id="jYw*4@+.otU87FlnJqHu">
                            <field name="NUM">1</field>
                        </block>
                    </value>
                    <next>
                        <block type="variables_set" id="8bb5wFGvCrTqItC2q70[">
                            <field name="VAR" id="}CM|})6CS_}s#ZCV%@[R">sum</field>
                            <value name="VALUE">
                                <block type="math_number" id="w}OMGU}4C_GX[Xrmc*Aw">
                                    <field name="NUM">0</field>
                                </block>
                            </value>
                            <next>
                                <block type="controls_whileUntil" id="P.4hvF5~^cl=$-+iV!#H">
                                    <field name="MODE">WHILE</field>
                                    <value name="BOOL">
                                        <block type="logic_compare" id="vikp/w#Uqmnl-ZXVn|^#">
                                            <field name="OP">LTE</field>
                                            <value name="A">
                                                <block type="variables_get" id="qzij(aB8UG/TR#^^ob/Y">
                                                    <field name="VAR" id="1:JKULK%uIgWntQo)0fU">j</field>
                                                </block>
                                            </value>
                                            <value name="B">
                                                <block type="variables_get" id="f5k^_Y:Zi|%VHgZ2^F:@">
                                                    <field name="VAR" id="wlvORpAvna0Bv*tGaL40">n</field>
                                                </block>
                                            </value>
                                        </block>
                                    </value>
                                    <statement name="DO">
                                        <block type="variables_set" id="t?b{1^kuQ:ouU?K*FZIF">
                                            <field name="VAR" id="}CM|})6CS_}s#ZCV%@[R">sum</field>
                                            <value name="VALUE">
                                                <block type="math_arithmetic" id="|O.*SMB^,p1m4GCDSj_U">
                                                    <field name="OP">ADD</field>
                                                    <value name="A">
                                                        <shadow type="math_number" id="vQEU2/:?rt}Ng*0lnAY3">
                                                            <field name="NUM">1</field>
                                                        </shadow>
                                                        <block type="variables_get" id="R0HfB7;Jq.YR+/5?WA~Z">
                                                            <field name="VAR" id="}CM|})6CS_}s#ZCV%@[R">sum</field>
                                                        </block>
                                                    </value>
                                                    <value name="B">
                                                        <shadow type="math_number" id="J5T_Ur|bpVwa6/1Kq}r_">
                                                            <field name="NUM">1</field>
                                                        </shadow>
                                                        <block type="variables_get" id="^5R!=PfgyX#~1xc;8h$7">
                                                            <field name="VAR" id="1:JKULK%uIgWntQo)0fU">j</field>
                                                        </block>
                                                    </value>
                                                </block>
                                            </value>
                                            <next>
                                                <block type="variables_set" id=")1T_srOlaOEeGwRSSje)">
                                                    <field name="VAR" id="1:JKULK%uIgWntQo)0fU">j</field>
                                                    <value name="VALUE">
                                                        <block type="math_arithmetic" id="fNnb8+Yg3U%yj!*2f-c7">
                                                            <field name="OP">ADD</field>
                                                            <value name="A">
                                                                <shadow type="math_number">
                                                                    <field name="NUM">1</field>
                                                                </shadow>
                                                                <block type="variables_get" id="+hLR2!CBI.v8iLZr~W.B">
                                                                    <field name="VAR" id="1:JKULK%uIgWntQo)0fU">j</field>
                                                                </block>
                                                            </value>
                                                            <value name="B">
                                                                <shadow type="math_number" id="1OE6W#2mr0qx1o$z211Z">
                                                                    <field name="NUM">1</field>
                                                                </shadow>
                                                            </value>
                                                        </block>
                                                    </value>
                                                </block>
                                            </next>
                                        </block>
                                    </statement>
                                </block>
                            </next>
                        </block>
                    </next>
                </block>
            </statement>
            <value name="RETURN">
                <block type="variables_get" id="[zvP=14gP:T7FhoPm=h|">
                    <field name="VAR" id="}CM|})6CS_}s#ZCV%@[R">sum</field>
                </block>
            </value>
        </block>
    </xml>
@endsection

@section('scriptJs')
    <script src="{{asset('js/Blockly/blockly_compressed.js')}}"></script>
    <script src="{{asset('js/Blockly/blocks_compressed.js')}}"></script>
    <script src="{{asset('js/Blockly/javascript_compressed.js')}}"></script>
    <script src="{{asset('js/Blockly/python_compressed.js')}}"></script>
    <script src="{{asset('js/Blockly/php_compressed.js')}}"></script>
    <script src="{{asset('js/Blockly/lua_compressed.js')}}"></script>
    <script src="{{asset('js/Blockly/dart_compressed.js')}}"></script>
    <script src="{{asset('js/Blockly/code.js')}}"></script>
@endsection