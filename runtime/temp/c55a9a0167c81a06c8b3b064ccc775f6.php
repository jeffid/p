<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"D:\APP\wamp\www\XDL\zhipin\public/../application/home\view\resume\history_add.html";i:1525658743;}*/ ?>
<form data-action="/employee/resumeHistoryAddExec" method="post" class="form-resume" data-form="form-history-add">
    <h3 class="title">添加工作经历</h3>
    <div class="form-row">
        <dl>
            <dt>公司名称</dt>
            <dd>
                <input type="text" ka="work-company" name="company" value="" class="ipt required"
                       placeholder="例如：北京百度科技有限公司" data-range="1,46" data-blank="必填" data-format="请输入不超过 46 个中文字符"
                       maxlength="46" required>
            </dd>
        </dl>
        <dl>
            <dt>职位类型</dt>
            <dd>
                <span class="dropdown-select">
                    <i class="icon-select-arrow"></i>
                    <input type="text" ka="work-position" name="positionType" value="" class="ipt" placeholder="选择职位类型" readonly="">
                    <input type="hidden" value="" level2="" name="position" class="required"
                           data-blank="必选">
                </span>
                <div class="dropdown-menu">
                    <script src="/static/home/js/jobdata.js"></script>
                    <div class="select-tree" data-level="3">
                        <ul class="tree-1">
                            <li data-id="100000">技术</li>
                            <li data-id="110000">产品</li>
                            <li data-id="120000">设计</li>
                            <li data-id="130000">运营</li>
                            <li data-id="140000">市场</li>
                            <li data-id="150000">职能/高级管理</li>
                            <li data-id="160000">销售</li>
                            <li data-id="170000">传媒</li>
                            <li data-id="180000">金融</li>
                            <li data-id="230000">汽车</li>
                            <li data-id="190000">教育培训</li>
                            <li data-id="210000">医疗健康</li>
                            <li data-id="250000">采购/贸易</li>
                            <li data-id="240000">供应链/物流</li>
                            <li data-id="220000">房地产/建筑</li>
                            <li data-id="260000">咨询/翻译/法律</li>
                            <li data-id="270000">实习生/管培生</li>
                            <li data-id="280000">旅游</li>
                            <li data-id="290000">酒店/餐饮/零售</li>
                            <li data-id="300000">生产制造</li>
                            <li data-id="200000">其他</li>
                        </ul>
                        <ul class="tree-2">
                            <li class="blank">选择职类</li>
                        </ul>
                        <ul class="tree-3"></ul>
                    </div>
                </div>
            </dd>
        </dl>
    </div>
    <div class="form-row">
        <dl>
            <dt>职位名称</dt>
            <dd>
                <input type="text" ka="work-position-name" name="positionName" value="" class="ipt required"
                       placeholder="例如：UI设计师" data-range="1,12" data-blank="必填" data-format="请输入 12 字以内的职位名称"
                       maxlength="12" required>
            </dd>
        </dl>
        <dl>
            <dt>所属行业</dt>
            <dd>
                <span class="">
                    <input type="text" ka="work-industry" value="" name="industryCategory" class="ipt ipt-industry"
                           placeholder="选择行业" readonly="">
                    <input type="hidden" value="0" name="industryCode" class="required" data-blank="必选">
                </span>
            
            </dd>
        </dl>
    </div>
    
    <div class="form-row">
        <dl>
            <dt>在职时间</dt>
            <dd>
                <span class="dropdown-select">
                    <i class="icon-select-arrow"></i>
                    <input name="startDateName" type="text" value="" class="ipt ipt-range" data-range="start" data-type="y"
                           placeholder="选择年份" readonly="">
                    <input type="hidden" name="startDate" value="" class="required" data-blank="请选择时间段">
                </span>
                <div class="dropdown-menu">
                    <ul>
                        <li data-val="2018">2018</li>
                        <li data-val="2017">2017</li>
                        <li data-val="2016">2016</li>
                        <li data-val="2015">2015</li>
                        <li data-val="2014">2014</li>
                        <li data-val="2013">2013</li>
                        <li data-val="2012">2012</li>
                        <li data-val="2011">2011</li>
                        <li data-val="2010">2010</li>
                        <li data-val="2009">2009</li>
                        <li data-val="2008">2008</li>
                        <li data-val="2007">2007</li>
                        <li data-val="2006">2006</li>
                        <li data-val="2005">2005</li>
                        <li data-val="2004">2004</li>
                        <li data-val="2003">2003</li>
                        <li data-val="2002">2002</li>
                        <li data-val="2001">2001</li>
                        <li data-val="2000">2000</li>
                        <li data-val="1999">1999</li>
                        <li data-val="1998">1998</li>
                        <li data-val="1997">1997</li>
                        <li data-val="1996">1996</li>
                        <li data-val="1995">1995</li>
                        <li data-val="1994">1994</li>
                        <li data-val="1993">1993</li>
                        <li data-val="1992">1992</li>
                        <li data-val="1991">1991</li>
                        <li data-val="1990">1990</li>
                        <li data-val="1989">1990年以前</li>
                    </ul>
                </div>
            </dd>
        </dl>
        <dl>
            <dt>&nbsp;</dt>
            <dd>
                <span class="prefix-day">至</span>
                <span class="dropdown-select">
                    <i class="icon-select-arrow"></i>
                    <input name="endDateName" type="text" value="" class="ipt ipt-range" data-range="end" data-type="y" placeholder="选择年份"
                           readonly="">
                    <input type="hidden" name="endDate" value="" class="required" data-blank="请选择时间段">
                </span>
                <div class="dropdown-menu">
                    <ul>
                        <li data-val="-1">至今</li>
                        <li data-val="2018">2018</li>
                        <li data-val="2017">2017</li>
                        <li data-val="2016">2016</li>
                        <li data-val="2015">2015</li>
                        <li data-val="2014">2014</li>
                        <li data-val="2013">2013</li>
                        <li data-val="2012">2012</li>
                        <li data-val="2011">2011</li>
                        <li data-val="2010">2010</li>
                        <li data-val="2009">2009</li>
                        <li data-val="2008">2008</li>
                        <li data-val="2007">2007</li>
                        <li data-val="2006">2006</li>
                        <li data-val="2005">2005</li>
                        <li data-val="2004">2004</li>
                        <li data-val="2003">2003</li>
                        <li data-val="2002">2002</li>
                        <li data-val="2001">2001</li>
                        <li data-val="2000">2000</li>
                        <li data-val="1999">1999</li>
                        <li data-val="1998">1998</li>
                        <li data-val="1997">1997</li>
                        <li data-val="1996">1996</li>
                        <li data-val="1995">1995</li>
                        <li data-val="1994">1994</li>
                        <li data-val="1993">1993</li>
                        <li data-val="1992">1992</li>
                        <li data-val="1991">1991</li>
                        <li data-val="1990">1990</li>
                    </ul>
                </div>
            </dd>
        </dl>
    </div>
    
    <div class="form-row">
        <dl>
            <dt>所属部门</dt>
            <dd>
                <input type="text" ka="work-department" name="department" value="" class="ipt" placeholder="选填"
                       data-range="0,6" data-blank="选填" data-format="请输入 6 字以内的部门名称" maxlength="6" required>
            </dd>
        </dl>
    </div>
    <div class="form-row row-area item-form-through">
        <dl>
            <dt>工作内容</dt>
            <dd>
                <textarea name="responsibility" ka="work-responsibility"
                          placeholder="例如： 1、主要负责新员工入职培训； 2、分析制定员工每个月个人销售业绩； 3、帮助员工提高每日客单价，整体店面管理等工作； "
                          class="ipt ipt-area required" data-range="1,1600" data-blank="必填"
                          data-format="请输入 1600 字以内的工作内容" maxlength="1600" value=""></textarea>
                <span class="count-num"><em>0</em>/1600</span>
            </dd>
        </dl>
    </div>
    <div class="form-row row-area item-form-through">
        <dl>
            <dt>工作业绩</dt>
            <dd>
                <textarea name="workPerformance" ka="work-performance"
                          placeholder="(选填)填写完整、有吸引力的工作业绩，有助于您更多地吸引Boss的关注 例如：1.取得的成绩… 2.实现的突破… 3.获得的表彰…"
                          class="ipt ipt-area" data-range="0,300" data-blank="必填" data-format="请输入 300 字以内的工作业绩"
                          maxlength="300" value=""></textarea>
                <div class="hidden-row">
                    <label class="checkbox">
                        <input type="checkbox" ka="work-hide" name="isPublic" value="1" checked="checked">
                        <span>对该公司隐藏我的简历</span>
                    </label>
                </div>
                <span class="count-num"><em>0</em>/300</span>
            </dd>
        </dl>
    </div>
    <div class="form-btns">
        <input type="hidden" name="id" value="">
        <button class="btn btn-back" ka="work-cancel" type="button" data-func="func-cancel">取消</button>
        <button class="btn" ka="work-save" type="submit">完成</button>
    </div>
</form>
