<?=$page_content;?>

<select name="courses" >
    <?php foreach($list_of_courses as $course_name); ?>
    <option><?=$course_name?></option>
</select>

<form >
    <input type="hidden" name="option" value="bySemester">
    <?php
 foreach(get_semesters() as $semester){
    echo $semester . '<input type=radio name=semeseter value=' . $semester.'>';
 }

?>
<input type="submit">
</form>