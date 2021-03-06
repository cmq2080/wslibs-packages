<form role="form" class="epii" method="post" data-form="1" action="">
    {if isset($project['id'])===false}
    <!-- 新增时出现 -->
    <div class="form-group">
        <label>项目来源：</label>
        <select class="selectpicker" id="class" name="source">
            <option value="0">请选择</option>
            {:options,$sourceOptions}
        </select>
    </div>
    {/if}
    <div class="form-group">
        <label for="class">所属项目组：</label><br>
        <select class="selectpicker" id="class" name="project_group_id">
            <option value="0">请选择</option>
            {:options,$projectGroups,$project.project_group_id?}
        </select>
    </div>
    {if isset($project['id'])===false}
    <!-- 新增时出现 -->
    <div class="form-group">
        <label>项目仓库名：</label>
        <input type="text" class="form-control" name="project_repo_name" value="{? $project.project_repo_name}" required
               placeholder="请输入项目名称">
    </div>
    <!-- 新增时出现 -->
    <div class="form-group">
        <label>项目版本号：</label>
        <input type="text" class="form-control" name="version_name" value="" required
               placeholder="请输入项目版本号">
    </div>
    {else}
    <div class="form-group">
        <label>项目名称：</label>
        <input type="text" class="form-control" name="project_name" value="{? $project.project_name}" required readonly
               placeholder="请输入项目名称">
    </div>
    {/if}
    
    <div class="form-footer">
        <button type="submit" class="btn btn-primary">提交</button>
    </div>
</form>
