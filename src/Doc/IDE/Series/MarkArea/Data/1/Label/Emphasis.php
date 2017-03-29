<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series\MarkArea\Data\1\Label;

class Emphasis
{            
        
    /**
     * @var boolean 是否显示标签。
     */
    public $show = false;        
        
    /**
     * @var string|array 标签的位置。
     * 可选：
     * 
     * [x, y]
     *   通过相对的百分比或者绝对像素值表示标签相对于图形包围盒左上角的位置。
     *   示例：
     *   // 绝对的像素值
     *   position: [10, 10],
     *   // 相对的百分比
     *   position: [50%, 50%]
     * 
     * 
     * top
     * 
     * left
     * right
     * bottom
     * inside
     * insideLeft
     * insideRight
     * insideTop
     * insideBottom
     * insideTopLeft
     * insideBottomLeft
     * insideTopRight
     * insideBottomRight
     */
    public $position;        
        
    /**
     * @var array 是否对文字进行偏移。默认不偏移。例如：[30, 40] 表示文字在横向上偏移 30，纵向上偏移 40。
     */
    public $offset;        
        
    /**
     * @var Emphasis\TextStyle 标签的字体样式。
     */
    public $textStyle;

}