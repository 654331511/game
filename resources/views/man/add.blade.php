<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="/admincss/pintuer.css">
<link rel="stylesheet" href="/admincss/admin.css">
<script src="/adminjs/jquery.js"></script>
<script src="/adminjs/pintuer.js"></script>
</head>
<body>
@include('vendor.UEditor.head')
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>添加文章</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="/insert" enctype="multipart/form-data">
      <div class="form-group">
        <div class="label">
          <label>首页标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="hometitle" data-validate="required:请输入首页标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="title" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>首页图片：</label>
        </div>
        <div class="field">
          <!-- <input type="text" id="url1" name="homepage" class="input tips" style="width:25%; float:left;"  value=""  data-toggle="hover" data-place="right" data-image="" /> -->
          <input type="file" name="homepage" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;">
          <div class="tipss">图片尺寸：600*300</div>
        </div>
      </div>
        <div class="form-group">
          <div class="label">
            <label>文章分类：</label>
          </div>
          <div class="field">
            <select name="sort" class="input w50">
              @foreach($sortname as $key)
                <option value="{{$key}}">{{$key}}</option>
              @endforeach
            </select>
            <div class="tips"></div>
          </div>
        </div>
        <!-- <div class="form-group">
          <div class="label">
            <label>其他属性：</label>
          </div>
          <div class="field" style="padding-top:8px;">
            首页 <input id="ishome"  type="checkbox" />
            推荐 <input id="isvouch"  type="checkbox" />
            置顶 <input id="istop"  type="checkbox" />
          </div>
        </div> -->
      <div class="form-group">
        <div class="label">
          <label>首页描述：</label>
        </div>
        <div class="field">
          <textarea class="input" name="homecon" style=" height:90px;"></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>内容：</label>
        </div>
        <div class="field">
          <!-- <textarea name="content" class="input" style="height:450px; border:1px solid #ddd;"></textarea> -->
          <script id="container" name="content" type="text/plain" style="height:600px;">
          </script>
          <div class="tips"></div>
        </div>
      </div>

      <div class="clear"></div>
      <div class="form-group">
        <div class="label">
          <label>来源：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="source" value=""  />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>作者：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="author" value=""  />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>点击量：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="clicks" value="" data-validate="member:只能为数字"  />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>

</body>
<script type="text/javascript">
    var ue = UE.getEditor('container');
</script>
</html>
