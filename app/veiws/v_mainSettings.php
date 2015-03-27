<form action="" method="post" class="mainSettingsForm">  
    <label>Site name</label>
    <input type="text" name="site_name" value="">
    <label>Site url</label>
    <input type="text" name="site_url" value="">    
    <label>Email</label>
    <input type="email" name="site_email" value="">
    <label>Site Description</label>
    <textarea name="site_dcsc"></textarea>
    <label>Site Tags</label>
    <textarea name="site_tags"></textarea>
    <label>Home panel notes</label>
    <textarea name="site_homepanel"></textarea>
    <label>Facebook link</label>
    <input type="text" name="fb" value="">
    <label>Twitter link</label>
    <input type="text" name="tw" value="">
    <label>Youtube link</label>
    <input type="text" name="yt" value="">
    <label>RSS link</label>
    <input type="text" name="rss" value="">    
        
    <input type="hidden" name="username" value="<?php echo $_SESSION['username'];?>">
    
    <input class="btn-lg btn-primary" type="submit" value="Update" name="submit">
    
</form>
