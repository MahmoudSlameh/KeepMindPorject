@extends('AdminCp.layouts.CpApp')
@section('style')
    <link rel="stylesheet" href="{{asset('AdminCp/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminCp/plugins/ion-rangeslider/css/ion.rangeSlider.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminCp/dist/css/prettify.css')}}">

@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-lightblue">
                <div class="card-header">
                    <h3 class="card-title">Add Exercise</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form role="form">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Title input -->
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" placeholder="Enter ...">
                                </div>
                                <!--Detile -->
                                <div class="form-group mb-3">
                                    <label>Description</label>
                                    <textarea  class="textarea" placeholder="Place some text here"
                                               style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label class="w-100" >Difference</label>
                                    <div class="btn-group-lg btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-outline-success active">
                                            <input type="radio" name="options" id="option1" autocomplete="off" checked> Easy
                                        </label>
                                        <label class="btn btn-outline-primary">
                                            <input type="radio" name="options" id="option2" autocomplete="off"> Intermediate
                                        </label>
                                        <label class="btn btn-outline-danger">
                                            <input type="radio" name="options" id="option3" autocomplete="off"> Hard
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="w-100" >Age Class</label>
                                        <div class="btn-group-lg btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-outline-warning active fa fa-child">
                                                <input  type="radio" name="options" id="option11" checked>Child
                                            </label>
                                            <label class="btn btn-outline-info fa fa-male">
                                                <input type="radio" name="options" id="option22">Adult
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Min Rank-->
                            <div class="col-sm-12 mt-4">
                                <div class="form-group">
                                    <label for="range_5">Min Rank Required</label>
                                    <input id="range_5" type="text" name="range_5" value="">
                                </div>
                            </div>
                            <!--Achive Rank-->
                            <div class="col-sm-12 mt-4">
                                <div class="form-group">
                                    <label for="range_6">Achive Rank</label>
                                    <input id="range_6" type="text" name="range_6" value="">
                                </div>
                            </div>
                            <!--Category-->
                            <div class="col-sm-10 mt-4">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="select2" multiple="multiple" data-placeholder="Select a Category" style="width: 100%;">
                                        <option>Math</option>
                                        <option>Problem Solve</option>
                                        <option>Logic</option>
                                        <option>Data Structure</option>
                                        <option>Algorithm</option>
                                        <option>Test Unit</option>
                                        <option>String</option>
                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-sm-2 mt-4">
                                <div class="form-group">
                                    <label>Order In Track</label>
                                    <input type="number" class="form-control" value="1" min="1">
                                </div>
                                <!-- /.form-group -->
                            </div>

                            <div class="card card-success col-md-12">
                                <div class="card-header">
                                    <h3 class="card-title">Validation</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6 mt-4">
                                            <div class="form-group">
                                                <label>Input</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                        <div class="col-sm-6 mt-4">
                                            <div class="form-group">
                                                <label>Output</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                        <!-- Blockly Testing -->
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <xml id="toolbox" style="display: none">
                                                        <block type="controls_if"></block>
                                                        <block type="controls_repeat_ext"></block>
                                                        <block type="logic_compare"></block>
                                                        <block type="math_number"></block>
                                                        <block type="math_arithmetic"></block>
                                                        <block type="text"></block>
                                                        <block type="text_print"></block>
                                                    </xml>
                                                    <div id="blocklyDiv" style="width:100%;height:600px;"></div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="card card-default mt-2">
                                                        <div class="card-header">Python Code</div>
                                                        <div class="card-body">
                                                            <pre id="pyahtonCode" class="content"></pre>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" onclick="RunCode()" class="btn btn-info w-100 mt-2">Test I/O</button>

                                        <!-- /.form-group -->
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </form>

                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection

@section('scriptJs')
    <!-- Ion Slider -->
    <script src="{{asset('AdminCp/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
    <!-- Select2 -->
    <script src="{{asset('AdminCp/plugins/select2/js/select2.full.min.js')}}"></script>

{{--Blockly--}}
    <script src="{{asset('js/Blockly/blockly_compressed.js')}}"></script>
    <script src="{{asset('js/Blockly/blocks_compressed.js')}}"></script>
    <script src="{{asset('js/Blockly/msg/js/en.js')}}"></script>
    <script src="{{asset('js/Blockly/javascript_compressed.js')}}"></script>
    <script src="{{asset('js/Blockly/python_compressed.js')}}"></script>
    <script src="{{asset('AdminCp/dist/js/prettify.js')}}"></script>
    <script>
        $(function () {
            // Summernote
            $('.textarea').summernote({height:'400px'})
            $('#range_5,#range_6').ionRangeSlider({
                skin: "round",
                min     : 0,
                max     : 100,
                type    : 'single',
                step    : 1,
                postfix : ' XP',
                prettify: false,
                hasGrid : true,
            })
            $('.select2').select2()
        })

        var workspace = Blockly.inject('blocklyDiv',
            { toolbox: document.getElementById('toolbox'),
                scrollbars:true,
                css:true,
                grid:
                    {spacing: 25,
                        length: 3,
                        colour: '#ccc',
                        snap: true},
                zoom:
                    {controls: true,
                    }
            });
        workspace.changeContent=function () {
            // Generate JavaScript code and display it.
            Blockly.Python.INFINITE_LOOP_TRAP = null;
            var code = Blockly.JavaScript.workspaceToCode(workspace);
            var content = document.getElementById('pyahtonCode');
            content.textContent = code;
            if (typeof prettyPrintOne == 'function') {
                code = content.innerHTML;
                code = prettyPrintOne(code, 'py');
                content.innerHTML = code;
            }
        }
        workspace.addChangeListener(workspace.changeContent);

        function RunCode() {
            window.LoopTrap = 1000;
            Blockly.JavaScript.INFINITE_LOOP_TRAP = 'if(--window.LoopTrap == 0) throw "Infinite loop.";\n';
            var code = Blockly.Python.workspaceToCode(workspace);
            try {
                eval(code);
            } catch (e) {
                alert(e);
            }
        }
    </script>

@endsection
