<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $("section.text").each(function() {
        id = $(this).attr("id");
        if (id != "options" && id != "kirbytags" && id != "panel-fields" && id != "validators") {
          $(this).find(".cheatsheet-grid-item").each(function() {
            text = $(this).find("h3.gamma").html();
            if (text.charAt( 0 ) == "$") {
              snippet = text.substring(text.indexOf("-")).replace(/\s*\(.*?\)\s*/g, '()');
            }
            else {
              snippet = text.replace(/\s*\(.*?\)\s*/g, '()');
            }

            $(".output").append(
              '{\n' +
              ' "displayText": "' + text + '",\n' +
              ' "type": "' + id + '",\n' +
              ' "description": "' + $(this).find("p").html() + '",\n' +
              ' "descriptionMoreUrl": "' + $(this).find("a").attr("href") + '",\n' +
              ' "snippet": "' + snippet + '"\n' +
              "},\n"
            );

          });
        };
      });
    });
    </script>
</head>
<body>

  <pre class="output"></pre>


<section class="text" id="camera">
<h2 class="beta no-margin-bottom">$camera</h2>

<div class="cheatsheet-grid">
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/camera/make">
<h3 class="gamma">$camera-&gt;make()</h3>
<p>Returns the camera brand/make</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/camera/model">
<h3 class="gamma">$camera-&gt;model()</h3>
<p>Returns the name of the camera model</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/camera/to-array">
<h3 class="gamma">$camera-&gt;toArray()</h3>
<p>Returns the make and model as associative array.</p>        </a>
</div>
</div>

</section>
<section class="text" id="content">
<h2 class="beta no-margin-bottom">$content</h2>

<div class="cheatsheet-grid">
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/content/data">
<h3 class="gamma">$content-&gt;data()</h3>
<p>Returns the entire data array with all field objects</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/content/exists">
<h3 class="gamma">$content([$lang])-&gt;exists()</h3>
<p>Checks if the content file exists</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/content/fields">
<h3 class="gamma">$content([$lang])-&gt;fields()</h3>
<p>Returns an array with all field names</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/content/get">
<h3 class="gamma">$content([$lang])-&gt;get($key, $arguments = null)</h3>
<p>Gets a field from the content</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/content/has">
<h3 class="gamma">$content([$lang])-&gt;has($key)</h3>
<p>Checks if a field exists</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/content/language">
<h3 class="gamma">$content-&gt;language()</h3>
<p>Return the language code for the content</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/content/name">
<h3 class="gamma">$content-&gt;name()</h3>
<p>Returns the name of the content file without the extension. This is being used to determine the template for the page</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/content/raw">
<h3 class="gamma">$content([$lang])-&gt;raw()</h3>
<p>Returns the raw content from the file</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/content/root">
<h3 class="gamma">$content([$lang])-&gt;root()</h3>
<p>Returns the root for the content file</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/content/to-array">
<h3 class="gamma">$content([$lang])-&gt;toArray()</h3>
<p>Returns the content object as array</p>        </a>
</div>
</div>

</section>
<section class="text" id="dimension">
<h2 class="beta no-margin-bottom">$dimension</h2>

<div class="cheatsheet-grid">
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/dimension/fit">
<h3 class="gamma">$dimension-&gt;fit()</h3>
<p>Fits the width and height into a box by the given value and returns a modified dimension object</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/dimension/fit-height">
<h3 class="gamma">$dimension-&gt;fitHeight()</h3>
<p>Fits the height by the given value and returns a modified dimension object</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/dimension/fit-width">
<h3 class="gamma">$dimension-&gt;fitWidth()</h3>
<p>Fits the width by the given value and returns a modified dimension object</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/dimension/fit-width-and-height">
<h3 class="gamma">$dimension-&gt;fitWidthAndHeight()</h3>
<p>Fits the width and height by the given values and returns a modified dimension object</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/dimension/height">
<h3 class="gamma">$dimension-&gt;height()</h3>
<p>Returns the height in pixels</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/dimension/landscape">
<h3 class="gamma">$dimension-&gt;landscape()</h3>
<p>Checks if the dimensions are "landscape"</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/dimension/orientation">
<h3 class="gamma">$dimension-&gt;orientation()</h3>
<p>Returns the orientation of the image as string (landscape|portrait|square)</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/dimension/portrait">
<h3 class="gamma">$dimension-&gt;portrait()</h3>
<p>Checks if the dimensions are "portrait"</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/dimension/ratio">
<h3 class="gamma">$dimension-&gt;ratio()</h3>
<p>Returns the ratio</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/dimension/square">
<h3 class="gamma">$dimension-&gt;square()</h3>
<p>Checks if the dimensions are square</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/dimension/width">
<h3 class="gamma">$dimension-&gt;width()</h3>
<p>Returns the width in pixels</p>        </a>
</div>
</div>

</section>
<section class="text" id="exif">
<h2 class="beta no-margin-bottom">$exif</h2>

<div class="cheatsheet-grid">
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/exif/aperture">
<h3 class="gamma">$exif-&gt;aperture()</h3>
<p>Returns the aperture value of the image, if it is available in the exif data set.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/exif/camera">
<h3 class="gamma">$exif-&gt;camera()</h3>
<p>Returns the $camera object for the image, which contains the make and model.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/exif/data">
<h3 class="gamma">$exif-&gt;data()</h3>
<p>Returns the full exif data set as a raw array.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/exif/exposure">
<h3 class="gamma">$exif-&gt;exposure()</h3>
<p>Returns the exposure value of the image, if it is available in the exif data set.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/exif/focal-length">
<h3 class="gamma">$exif-&gt;focalLength()</h3>
<p>Returns the focal length of the image, if it is available in the exif data set.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/exif/is-bw">
<h3 class="gamma">$exif-&gt;isBW()</h3>
<p>Checks if the image colorspace is grayscale</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/exif/is-color">
<h3 class="gamma">$exif-&gt;isColor()</h3>
<p>Checks if the image colorspace is either RGB or CMYK</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/exif/iso">
<h3 class="gamma">$exif-&gt;iso()</h3>
<p>Returns the iso value of the image, if it is available in the exif data set.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/exif/location">
<h3 class="gamma">$exif-&gt;location()</h3>
<p>Returns the $location object for the image if the image has GPS data.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/exif/timestamp">
<h3 class="gamma">$exif-&gt;timestamp()</h3>
<p>Returns the unix timestamp of when the image was taken.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/exif/to-array">
<h3 class="gamma">$exif-&gt;toArray()</h3>
<p>Returns an associative array of all available exif data.</p>        </a>
</div>
</div>

</section>
<section class="text" id="field-methods">
<h2 class="beta no-margin-bottom">Field methods</h2>

<div class="cheatsheet-grid">
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/bool">
<h3 class="gamma">$field-&gt;bool()</h3>
<p>Converts the field value into a proper boolean</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/empty">
<h3 class="gamma">$field-&gt;empty()</h3>
<p>Checks if the field is empty</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/escape">
<h3 class="gamma">$field-&gt;escape()</h3>
<p>Escapes all critical characters from the field content to make sure all you get is clean HTML</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/excerpt">
<h3 class="gamma">$field-&gt;excerpt($length = 140, $mode = 'chars')</h3>
<p>Creates a short text excerpt</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/exists">
<h3 class="gamma">$field-&gt;exists()</h3>
<p>Checks if the field exists.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/float">
<h3 class="gamma">$field-&gt;float()</h3>
<p>Converts the field value into a proper float</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/html">
<h3 class="gamma">$field-&gt;html()</h3>
<p>Converts the field content to valid HTML</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/int">
<h3 class="gamma">$field-&gt;int()</h3>
<p>Converts the field value into a proper integer</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/isEmpty">
<h3 class="gamma">$field-&gt;isEmpty()</h3>
<p>Checks if the field is empty</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/isFalse">
<h3 class="gamma">$field-&gt;isFalse()</h3>
<p>Converts the field value into a proper boolean and inverts it</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/isNotEmpty">
<h3 class="gamma">$field-&gt;isNotEmpty()</h3>
<p>Checks if the field is not empty</p>        </a>
</div>
      <div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/isTrue">
<h3 class="gamma">$field-&gt;isTrue()</h3>
<p>Converts the field value into a proper boolean</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/key">
<h3 class="gamma">$field-&gt;key()</h3>
<p>Returns the name of the field.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/kirbytext">
<h3 class="gamma">$field-&gt;kirbytext()</h3>
<p>Converts the field content from Markdown/Kirbytext to valid HTML</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/kt">
<h3 class="gamma">$field-&gt;kt()</h3>
<p>Converts the field content from Markdown/Kirbytext to valid HTML</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/length">
<h3 class="gamma">$field-&gt;length()</h3>
<p>Returns the length of the field content</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/link">
<h3 class="gamma">$field-&gt;link()</h3>
<p>Creates a link for any field value</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/lower">
<h3 class="gamma">$field-&gt;lower()</h3>
<p>Converts the field content to lowercase</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/markdown">
<h3 class="gamma">$field-&gt;markdown()</h3>
<p>Converts markdown to valid HTML</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/or">
<h3 class="gamma">$field-&gt;or($alternative)</h3>
<p>Checks if the field is empty and returns an alternative value in this case</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/pages">
<h3 class="gamma">$field-&gt;pages()</h3>
<p>Converts a yaml list of page URIs to valid page objects</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/short">
<h3 class="gamma">$field-&gt;short($chars)</h3>
<p>Shortens the field content by the given length</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/split">
<h3 class="gamma">$field-&gt;split($separator = ',')</h3>
<p>Splits the field content into an array</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/toFile">
<h3 class="gamma">$field-&gt;toFile()</h3>
<p>Returns a file object from a filename in the field</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/toPage">
<h3 class="gamma">$field-&gt;toPage()</h3>
<p>Returns a page object from a uri in the field</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/toStructure">
<h3 class="gamma">$field-&gt;toStructure()</h3>
<p>Converts a yaml field to a Structure object</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/toURL">
<h3 class="gamma">$field-&gt;toURL()</h3>
<p>Creates an URL for any field value</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/upper">
<h3 class="gamma">$field-&gt;upper()</h3>
<p>Converts the field content to uppercase</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/value">
<h3 class="gamma">$field-&gt;value()</h3>
<p>Returns the value of a field as string.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/widont">
<h3 class="gamma">$field-&gt;widont()</h3>
<p>Avoids typographical widows in strings by replacing the last space with <code>&amp;nbsp;</code></p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/words">
<h3 class="gamma">$field-&gt;words()</h3>
<p>Returns the number of words in the text</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/xml">
<h3 class="gamma">$field-&gt;xml()</h3>
<p>Converts the field content to valid XML</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/field-methods/yaml">
<h3 class="gamma">$field-&gt;yaml()</h3>
<p>Converts YAML-structured field content to an array</p>        </a>
</div>
</div>

</section>
<section class="text" id="file">
<h2 class="beta no-margin-bottom">$file</h2>
<div class="zeta subtitle">Inherits from <a href="https://getkirby.com/docs/toolkit/api/media">Media</a></div>

<div class="cheatsheet-grid">
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/append">
<h3 class="gamma">$file-&gt;append($content)</h3>
<p>Appends the content and saves the file</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/base64">
<h3 class="gamma">$file-&gt;base64()</h3>
<p>Returns the content of the file as base64 encoded string</p>        </a>
</div>
            <div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/content">
<h3 class="gamma">$file-&gt;content($content = null, $format = null)</h3>
<p>Setter and getter for the file content</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/copy">
<h3 class="gamma">$file-&gt;copy($to)</h3>
<p>Copies the file to a new location</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/create-new-filename">
<h3 class="gamma">$file-&gt;createNewFilename($name, $safeName = true)</h3>
<p>Generates a new filename for a given name and makes sure to handle badly given extensions correctly</p>        </a>
</div>
      <div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/data-uri">
<h3 class="gamma">$file-&gt;dataUri()</h3>
<p>Returns a full base64 encoded data uri with a proper mime type</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/date">
<h3 class="gamma">$file-&gt;date($format = null, $field = 'date')</h3>
<p>Returns a unix timestamp or formatted date string from the file's meta date field or any other field containing a parsable date</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/delete">
<h3 class="gamma">$file-&gt;delete()</h3>
<p>Deletes the file. This cannot be undone.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/dimensions">
<h3 class="gamma">$file-&gt;dimensions()</h3>
<p>Returns the $dimensions object for the file. This is only available for images (jpg, png, gif)</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/dir">
<h3 class="gamma">$file-&gt;dir()</h3>
<p>Returns the full path for the directory, in which the file is located</p>        </a>
</div>
      <div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/download">
<h3 class="gamma">$file-&gt;download($filename = null)</h3>
<p>Sends all needed headers and the content to force the browser to download the file</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/exif">
<h3 class="gamma">$file-&gt;exif()</h3>
<p>Returns the $exif object for the file, which can be used to fetch information such as the camera model or GPS data</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/exists">
<h3 class="gamma">$file-&gt;exists()</h3>
<p>Checks if the file exists</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/extension">
<h3 class="gamma">$file-&gt;extension()</h3>
<p>Returns the file extension</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/filename">
<h3 class="gamma">$file-&gt;filename()</h3>
<p>Returns the full filename including extension</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/files">
<h3 class="gamma">$file-&gt;files()</h3>
<p>Returns the collection of sibling files including the current object</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/has-next">
<h3 class="gamma">$file-&gt;hasNext()</h3>
<p>Checks if there's a next sibling</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/has-prev">
<h3 class="gamma">$file-&gt;hasPrev()</h3>
<p>Checks if there's a previous sibling</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/hash">
<h3 class="gamma">$file-&gt;hash()</h3>
<p>Returns an md5 hash for the root of the file</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/header">
<h3 class="gamma">$file-&gt;header($send = true)</h3>
<p>Sends an appropriate header for the asset</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/height">
<h3 class="gamma">$file-&gt;height()</h3>
<p>Returns the height of image files in pixels</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/html">
<h3 class="gamma">$file-&gt;html($attr = array())</h3>
<p>Auto-generates an HTML tag for images</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/imagesize">
<h3 class="gamma">$file-&gt;imagesize()</h3>
<p>Returns the PHP imagesize array</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/is">
<h3 class="gamma">$file-&gt;is($value)</h3>
<p>Checks if a file is of a certain type</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/is-executable">
<h3 class="gamma">$file-&gt;isExecutable()</h3>
<p>Checks if the file is executable</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/is-landscape">
<h3 class="gamma">$file-&gt;isLandscape()</h3>
<p>Checks if an image file has been taken in landscape mode</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/is-portrait">
<h3 class="gamma">$file-&gt;isPortrait()</h3>
<p>Checks if an image file has been taken in portrait mode</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/is-readable">
<h3 class="gamma">$file-&gt;isReadable()</h3>
<p>Checks if the file is readable</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/is-square">
<h3 class="gamma">$file-&gt;isSquare()</h3>
<p>Checks if the image is square</p>        </a>
</div>
      <div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/is-writable">
<h3 class="gamma">$file-&gt;isWritable()</h3>
<p>Checks if the file is writable</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/kirby">
<h3 class="gamma">$file-&gt;kirby()</h3>
<p>Returns the kirby object</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/load">
<h3 class="gamma">$file-&gt;load($data = array())</h3>
<p>Safely requires a file if it exists</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/meta">
<h3 class="gamma">$file-&gt;meta([$language])</h3>
<p>Returns the file's $content object with data from the meta file</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/mime">
<h3 class="gamma">$file-&gt;mime()</h3>
<p>Returns the file's mime type</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/modified">
<h3 class="gamma">$file-&gt;modified($format = false, $handler = null)</h3>
<p>Returns the unix timestamp or a formatted date for when the file has been modified</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/move">
<h3 class="gamma">$file-&gt;move($to)</h3>
<p>Moves the file to a new location</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/name">
<h3 class="gamma">$file-&gt;name()</h3>
<p>Returns the name of the file without extension</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/next">
<h3 class="gamma">$file-&gt;next()</h3>
<p>Returns the next sibling</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/nice-size">
<h3 class="gamma">$file-&gt;niceSize()</h3>
<p>Returns the size of the file in a human readable format</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/orientation">
<h3 class="gamma">$file-&gt;orientation()</h3>
<p>Returns the orientation of image files as a string (landscape, portrait, square)</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/original">
<h3 class="gamma">$file-&gt;original()</h3>
<p>Returns the reference to the original file (for thumbnails)</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/page">
<h3 class="gamma">$file-&gt;page()</h3>
<p>Returns the page object for a file</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/prev">
<h3 class="gamma">$file-&gt;prev()</h3>
<p>Returns the previous sibling</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/ratio">
<h3 class="gamma">$file-&gt;ratio()</h3>
<p>Returns the ratio of an image file</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/read">
<h3 class="gamma">$file-&gt;read($format = null)</h3>
<p>Reads the content of the file and returns it</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/remove">
<h3 class="gamma">$file-&gt;remove()</h3>
<p>Alternative for delete</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/rename">
<h3 class="gamma">$file-&gt;rename($name, $safeName = true)</h3>
<p>Renames the file and all the meta text files</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/reset">
<h3 class="gamma">$file-&gt;reset()</h3>
<p>Resets the internal memory data cache</p>        </a>
</div>
      <div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/root">
<h3 class="gamma">$file-&gt;root()</h3>
<p>Returns the full root for a file</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/safe-name">
<h3 class="gamma">$file-&gt;safeName()</h3>
<p>Returns the filename as safe name</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/save">
<h3 class="gamma">$file-&gt;save($content = null, $format = null)</h3>
<p>Saves new content to the file</p>        </a>
</div>
      <div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/show">
<h3 class="gamma">$file-&gt;show()</h3>
<p>Read and send the file with the correct headers</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/siblings">
<h3 class="gamma">$file-&gt;siblings()</h3>
<p>Returns all siblings of the file</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/site">
<h3 class="gamma">$file-&gt;site()</h3>
<p>Returns the site object</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/size">
<h3 class="gamma">$file-&gt;size()</h3>
<p>Returns the raw file size</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/textfile">
<h3 class="gamma">$file-&gt;textfile([$language])</h3>
<p>Returns the root for the meta file of the file</p>        </a>
</div>
      <div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/to-array">
<h3 class="gamma">$file-&gt;toArray($callback = null)</h3>
<p>Converts the entire file object into a plain PHP array</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/to-json">
<h3 class="gamma">$file-&gt;toJson($callback = null)</h3>
<p>Converts the entire media object into a JSON string</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/touch">
<h3 class="gamma">$file-&gt;touch()</h3>
<p>Change the file's modification date to now and create it with an empty content if it is not there yet</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/type">
<h3 class="gamma">$file-&gt;type()</h3>
<p>Returns the file type (image, document, video, archive, code, audio, unkown)</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/update">
<h3 class="gamma">$file-&gt;update($data = array()[, $language])</h3>
<p>Updates the meta information for a file</p>        </a>
</div>
      <div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/url">
<h3 class="gamma">$file-&gt;url()</h3>
<p>Returns the absolute URL for a file</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/width">
<h3 class="gamma">$file-&gt;width()</h3>
<p>Returns the width of image files in pixels</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/file/write">
<h3 class="gamma">$file-&gt;write($content = null, $format = null)</h3>
<p>Alternative for save</p>        </a>
</div>
</div>

</section>
<section class="text" id="files">
<h2 class="beta no-margin-bottom">$files</h2>

<div class="cheatsheet-grid">
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/files/count">
<h3 class="gamma">$files-&gt;count()</h3>
<p>Returns the number of files in the collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/files/filter">
<h3 class="gamma">$files-&gt;filter($callback)</h3>
<p>Applies a filter callback to each item in the collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/files/filterBy">
<h3 class="gamma">$files-&gt;filterBy()</h3>
<p>Filters the collection by a key and value.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/files/find">
<h3 class="gamma">$files-&gt;find()</h3>
<p>Finds a single file or multiple files by one or many filenames.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/files/findBy">
<h3 class="gamma">$files-&gt;findBy($field, $value)</h3>
<p>Finds a single file by key and value</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/files/first">
<h3 class="gamma">$files-&gt;first()</h3>
<p>Returns the first file in the collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/files/flip">
<h3 class="gamma">$files-&gt;flip()</h3>
<p>Returns the collection in reverse order</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/files/get">
<h3 class="gamma">$files-&gt;get($filename)</h3>
<p>Returns a single file by filename</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/files/groupBy">
<h3 class="gamma">$files-&gt;groupBy($field, $caseInsensitive = true)</h3>
<p>Groups all files in the collection by a given field.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/files/has">
<h3 class="gamma">$files-&gt;has($file)</h3>
<p>Checks if a $file object is included in the collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/files/keys">
<h3 class="gamma">$files-&gt;keys()</h3>
<p>Returns an array with all filenames in the collection.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/files/last">
<h3 class="gamma">$files-&gt;last()</h3>
<p>Returns the last file in the collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/files/limit">
<h3 class="gamma">$files-&gt;limit($limit)</h3>
<p>Returns the collection with a limited set of items</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/files/map">
<h3 class="gamma">$files-&gt;map($callback)</h3>
<p>Applies a callback to all items in the collection.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/files/not">
<h3 class="gamma">$files-&gt;not()</h3>
<p>Returns the collection without a given file. The ignored file can be passed by filename or entire file object.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/files/nth">
<h3 class="gamma">$files-&gt;nth($n)</h3>
<p>Returns the nth file in the collection.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/files/offset">
<h3 class="gamma">$files-&gt;offset($offset)</h3>
<p>Returns the collection starting from a given offset</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/files/paginate">
<h3 class="gamma">$files-&gt;paginate($limit, $options = array())</h3>
<p>Applies pagination to the collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/files/pagination">
<h3 class="gamma">$files-&gt;pagination()</h3>
<p>Returns the $pagination object</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/files/pluck">
<h3 class="gamma">$files-&gt;pluck($field, $split = null, $unique = false)</h3>
<p>Plucks all values for a specific field from the collection and returns those as array.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/files/shuffle">
<h3 class="gamma">$files-&gt;shuffle()</h3>
<p>Returns the collection in shuffled order.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/files/slice">
<h3 class="gamma">$files-&gt;slice($offset = null, $limit = null)</h3>
<p>Returns a sliced version of the collection starting from a given offset and an optional limited number of items.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/files/sortBy">
<h3 class="gamma">$files-&gt;sortBy($field, $direction = 'asc', $method = SORT_REGULAR)</h3>
<p>Sorts the files in the collection by field and direction</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/files/to-array">
<h3 class="gamma">$files-&gt;toArray($callback = null)</h3>
<p>Converts the collection to a simple array.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/files/to-json">
<h3 class="gamma">$files-&gt;toJson()</h3>
<p>Converts the collection to a json string.</p>        </a>
</div>
</div>

</section>
<section class="text" id="helpers">
<h2 class="beta no-margin-bottom">Helpers</h2>
<div class="zeta subtitle">See also <a href="https://getkirby.com/docs/toolkit/api/helpers">Toolkit helpers</a></div>

<div class="cheatsheet-grid">
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/attr">
<h3 class="gamma">attr($name, $value = null)</h3>
<p>Creates attributes for an HTML tag</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/brick">
<h3 class="gamma">brick($tag, $html = false, $attr = array())</h3>
<p>Creates an HTML Element (Brick object)</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/call">
<h3 class="gamma">call($function, $arguments = array())</h3>
<p>Calls a function with a given set of arguments</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/csrf">
<h3 class="gamma">csrf($check = null)</h3>
<p>Generates and checks CSRF tokens</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/css">
<h3 class="gamma">css($path, $media = null)</h3>
<p>Creates one or multiple CSS link tags</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/dump">
<h3 class="gamma">dump($variable, $echo = true)</h3>
<p>Dumps the content of any variable in a human readable way for debugging</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/e">
<h3 class="gamma">e($condition, $a, $b = null)</h3>
<p>Echos one of two alternatives depending on a condition (Shortcut for ecco())</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/ecco">
<h3 class="gamma">ecco($condition, $a, $b = null)</h3>
<p>Echos one of two alternatives depending on a condition</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/email">
<h3 class="gamma">email($params)</h3>
<p>Sends an email</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/esc">
<h3 class="gamma">esc($string, $context = 'html', $strict = false)</h3>
<p>Escapes strings based on the output context</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/excerpt">
<h3 class="gamma">excerpt($text, $length = 140, $mode = 'chars')</h3>
<p>Creates an excerpt of any text by a given character or word length</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/get">
<h3 class="gamma">get($key = null, $default = null)</h3>
<p>Fetches a POST or GET parameter by key</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/gist">
<h3 class="gamma">gist($url, $file = null)</h3>
<p>Embeds a Gist from Github by URL</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/go">
<h3 class="gamma">go($url = '/')</h3>
<p>Redirects to a different URL</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/gravatar">
<h3 class="gamma">gravatar($email, $size = 256, $default = 'mm')</h3>
<p>Builds the Gravatar URL by email</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/h">
<h3 class="gamma">h($text, $keepTags = true)</h3>
<p>Converts any text to valid HTML (shortcut for html())</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/html">
<h3 class="gamma">html($text, $keepTags = true)</h3>
<p>Converts any text to valid HTML</p>        </a>
</div>
      <div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/invalid">
<h3 class="gamma">invalid($data, $rules, $messages = array())</h3>
<p>Runs a number of validators on a set of data and checks if the data is invalid</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/js">
<h3 class="gamma">js($path, $async = false)</h3>
<p>Creates a script tag to load a javascript file</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/kirby">
<h3 class="gamma">kirby()</h3>
<p>Returns the Kirby object in any situation</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/kirbytag">
<h3 class="gamma">kirbytag($attr)</h3>
<p>Makes it possible to use any defined Kirbytag as standalone function</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/kirbytext">
<h3 class="gamma">kirbytext($text)</h3>
<p>Parses any text with Markdown and Kirbytext</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/l">
<h3 class="gamma">l($key, $default = null)</h3>
<p>Fetches a language variable for multi-language sites</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/markdown">
<h3 class="gamma">markdown($text)</h3>
<p>Parses the text as Markdown</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/memory">
<h3 class="gamma">memory()</h3>
<p>Returns the current memory usage in a human-readable format</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/multiline">
<h3 class="gamma">multiline($text)</h3>
<p>Converts new lines in text to html breaks.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/page">
<h3 class="gamma">page($uri = null)</h3>
<p>Fetches any page by URI or the current page when no URI is specified</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/pages">
<h3 class="gamma">pages($data = array())</h3>
<p>Helper to build page collections</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/param">
<h3 class="gamma">param($key = null, $default = null)</h3>
<p>Fetches a Kirby URL parameter</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/params">
<h3 class="gamma">params()</h3>
<p>Fetches all Kirby URL parameters</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/r">
<h3 class="gamma">r($condition, $a, $b = null)</h3>
<p>Returns either $a or $b by the given condition</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/site">
<h3 class="gamma">site()</h3>
<p>Returns the site object in any situation</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/size">
<h3 class="gamma">size($input)</h3>
<p>Returns the size of strings, numbers, files and arrays.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/smartypants">
<h3 class="gamma">smartypants($text)</h3>
<p>Applies the SmartyPants Typographer on an HTML string</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/snippet">
<h3 class="gamma">snippet($file, $data = array(), $return = false)</h3>
<p>Embeds a snippet from the snippet folder</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/structure">
<h3 class="gamma">structure($data, $page = null, $key = null)</h3>
<p>Creates a Kirby structure object from a data array</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/textfile">
<h3 class="gamma">textfile($uri, $template, $lang = null)</h3>
<p>Helper to create correct text file names for content files</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/this-url">
<h3 class="gamma">thisUrl()</h3>
<p>Returns the current url</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/thumb">
<h3 class="gamma">thumb($image, $params = array(), $obj = true)</h3>
<p>Creates a thumbnail for a given image object</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/twitter">
<h3 class="gamma">twitter($username, $text = null, $title = null, $class = null)</h3>
<p>Builds a Twitter profile link by username</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/u">
<h3 class="gamma">u($path = '/')</h3>
<p>Shortcut for url()</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/upload">
<h3 class="gamma">upload($to, $params = array())</h3>
<p>Shortcut for the Upload class</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/url">
<h3 class="gamma">url($path = '/')</h3>
<p>Builds an absolute URL for a given path</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/vimeo">
<h3 class="gamma">vimeo($url, $width = null, $height = null, $class = null)</h3>
<p>Embeds a Vimeo video by URL in an iframe</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/widont">
<h3 class="gamma">widont($text)</h3>
<p>Avoids typographical widows in strings by replacing the last space with <code>&amp;nbsp;</code></p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/xml">
<h3 class="gamma">xml($text)</h3>
<p>Converts any text to valid XML</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/yaml">
<h3 class="gamma">yaml($string)</h3>
<p>Parses any string as YAML</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/helpers/youtube">
<h3 class="gamma">youtube($url, $width = null, $height = null, $class = null)</h3>
<p>Embeds a Youtube video by URL in an iframe</p>        </a>
</div>
</div>

</section>
<section class="text" id="kirbytags">
<h2 class="beta no-margin-bottom">Kirby Tags</h2>

<div class="cheatsheet-grid">
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/kirbytags/date">
<h3 class="gamma">date</h3>
<p>Adds a dynamic date to the text</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/kirbytags/email">
<h3 class="gamma">email</h3>
<p>Creates an email address link</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/kirbytags/file">
<h3 class="gamma">file</h3>
<p>Creates a download link for any file</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/kirbytags/gist">
<h3 class="gamma">gist</h3>
<p>Embeds a Github Gist by URL</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/kirbytags/image">
<h3 class="gamma">image</h3>
<p>Embeds an image</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/kirbytags/link">
<h3 class="gamma">link</h3>
<p>Creates a link</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/kirbytags/tel">
<h3 class="gamma">tel</h3>
<p>Embeds a linked telephone number</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/kirbytags/twitter">
<h3 class="gamma">twitter</h3>
<p>Creates a link to a Twitter profile</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/kirbytags/vimeo">
<h3 class="gamma">vimeo</h3>
<p>Embeds a Vimeo video by URL</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/kirbytags/youtube">
<h3 class="gamma">youtube</h3>
<p>Embeds a Youtube video by URL</p>        </a>
</div>
</div>

</section>
<section class="text" id="language">
<h2 class="beta no-margin-bottom">$language</h2>

<div class="cheatsheet-grid">
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/language/code">
<h3 class="gamma">$language-&gt;code()</h3>
<p>Returns the iso language code</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/language/default">
<h3 class="gamma">$language-&gt;default()</h3>
<p>Checks if this is the default language</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/language/direction">
<h3 class="gamma">$language-&gt;direction()</h3>
<p>Returns the text direction of the language (rtl or ltr)</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/language/locale">
<h3 class="gamma">$language-&gt;locale()</h3>
<p>Returns the locale string</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/language/name">
<h3 class="gamma">$language-&gt;name()</h3>
<p>Returns the full name of the language</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/language/url">
<h3 class="gamma">$language-&gt;url()</h3>
<p>Returns the assigned base URL for the language</p>        </a>
</div>
</div>

</section>
<section class="text" id="location">
<h2 class="beta no-margin-bottom">$location</h2>

<div class="cheatsheet-grid">
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/location/lat">
<h3 class="gamma">$location-&gt;lat()</h3>
<p>Returns the latitude</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/location/lng">
<h3 class="gamma">$location-&gt;lng()</h3>
<p>Returns the longitude</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/location/to-array">
<h3 class="gamma">$location-&gt;toArray()</h3>
<p>Returns latitude and longitude as associative array</p>        </a>
</div>
</div>

</section>
<section class="text" id="options">
<h2 class="beta no-margin-bottom">Options</h2>

<div class="cheatsheet-grid">
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/cache">
<h3 class="gamma">cache</h3>
<p>Enables/disables Kirby's cache</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/cache-autoupdate">
<h3 class="gamma">cache.autoupdate</h3>
<p>If true, Kirby will scan the content folder for updates and refresh the cache automatically</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/cache-driver">
<h3 class="gamma">cache.driver</h3>
<p>Kirby has three built-in cache drivers: file, memcached and apc</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/cache-ignore">
<h3 class="gamma">cache.ignore</h3>
<p>An array of URIs of pages, which should be ignored by the cache</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/cache-options">
<h3 class="gamma">cache.options</h3>
<p>An array of options for the cache driver</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/content-file-extension">
<h3 class="gamma">content.file.extension</h3>
<p>The file extension for files in the content folder, which are detected as content files by Kirby's core</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/content-file-ignore">
<h3 class="gamma">content.file.ignore</h3>
<p>An array of file names / folder names, which are not being scanned by Kirby's core</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/css-handler">
<h3 class="gamma">css.handler</h3>
<p>Set your own handler for the css() helper function</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/date-handler">
<h3 class="gamma">date.handler</h3>
<p>Can be 'date' or 'strftime' to determine which PHP function is used to formate dates for pages and files.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/debug">
<h3 class="gamma">debug</h3>
<p>Enables/disables PHP errors</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/error">
<h3 class="gamma">error</h3>
<p>The name of the error page folder</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/headers">
<h3 class="gamma">headers</h3>
<p>An array with template names as keys and HTTP headers as values. Those headers will be sent before the template is rendered.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/home">
<h3 class="gamma">home</h3>
<p>The name of the home page folder</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/js-handler">
<h3 class="gamma">js.handler</h3>
<p>Set your own handler for the js() helper function</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/kirbytext-image-figure">
<h3 class="gamma">kirbytext.image.figure</h3>
<p>If false, the image Kirbytag will no longer wrap images in figure elements.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/kirbytext-video-class">
<h3 class="gamma">kirbytext.video.class</h3>
<p>The default class which is being added to Youtube and Vimeo iframes</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/kirbytext-video-height">
<h3 class="gamma">kirbytext.video.height</h3>
<p>The default height which is being added to Youtube and Vimeo iframes (false = no width)</p>        </a>
</div>
      <div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/kirbytext-video-width">
<h3 class="gamma">kirbytext.video.width</h3>
<p>The default width which is being added to Youtube and Vimeo iframes (false = no width)</p>        </a>
</div>
      <div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/language-detect">
<h3 class="gamma">language.detect</h3>
<p>Enables/disables automatic language detection for multi-language sites</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/languages">
<h3 class="gamma">languages</h3>
<p>Language definition for multi-language sites</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/license">
<h3 class="gamma">license</h3>
<p>Setup for the license key</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/locale">
<h3 class="gamma">locale</h3>
<p>Sets the global locale setting for PHP</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/markdown">
<h3 class="gamma">markdown</h3>
<p>If false, markdown parsing will be disabled in Kirbytext</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/markdown-breaks">
<h3 class="gamma">markdown.breaks</h3>
<p>Enables/disables automatic line breaks in Markdown like on Github. Otherwise line breaks must be confirmed with three spaces at the end of the line.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/markdown-extra">
<h3 class="gamma">markdown.extra</h3>
<p>Enables/disables the Markdown extra parser with additional Markdown features like footnotes and tables.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/markdown-parser">
<h3 class="gamma">markdown.parser</h3>
<p>Set your own markdown parser handler</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/panel-info-license">
<h3 class="gamma">panel.info.license</h3>
<p>Show/Hide Kirby license information in the Panel.</p>        </a>
    </div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/panel-info-versions">
<h3 class="gamma">panel.info.versions</h3>
<p>Show/hide Kirby/Panel/Toolkit version information in the panel.</p>        </a>
    </div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/panel-kirbytext">
<h3 class="gamma">panel.kirbytext</h3>
<p>If false, the Panel formatting buttons and drag and drop for files and links will create regular Markdown instead of Kirbytags.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/panel-language">
<h3 class="gamma">panel.language</h3>
<p>The code for the default interface language for the panel before the user's choice kicks in.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/panel-session-timeout">
<h3 class="gamma">panel.session.timeout</h3>
<p>Set timeout for the Panel session.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/panel-stylesheet">
<h3 class="gamma">panel.stylesheet</h3>
<p>Set a custom stylesheet for the panel, which will be loaded after all the default styles.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/rewrite">
<h3 class="gamma">rewrite</h3>
<p>Enables/disables URL rewriting</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/roles">
<h3 class="gamma">roles</h3>
<p>Available user roles</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/routes">
<h3 class="gamma">routes</h3>
<p>Additional route setup for Kirby's internal router</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/smartypants">
<h3 class="gamma">smartypants</h3>
<p>Enables/disables the smartypants plugin</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/smartypants-parser">
<h3 class="gamma">smartypants.parser</h3>
<p>Set your own smartypants parser handler</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/ssl">
<h3 class="gamma">ssl</h3>
<p>If true, Kirby will redirect all http requests to https.</p>        </a>
</div>
      <div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/thumbs-destination">
<h3 class="gamma">thumbs.destination</h3>
<p>Sets your own handler for where to store thumbnails</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/thumbs-driver">
<h3 class="gamma">thumbs.driver</h3>
<p>The thumbnail library which is being used by Kirby's thumb function/class ('gd' or 'im')</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/thumbs-filename">
<h3 class="gamma">thumbs.filename</h3>
<p>The naming scheme for thumb files</p>        </a>
</div>
                  <div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/timezone">
<h3 class="gamma">timezone</h3>
<p>The PHP timezone setting for all date functions</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/tinyurl-enabled">
<h3 class="gamma">tinyurl.enabled</h3>
<p>Enables/disables tinyurls</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/tinyurl-folder">
<h3 class="gamma">tinyurl.folder</h3>
<p>Tinyurl format: yourdomain/{folder}/{hash}</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/options/url">
<h3 class="gamma">url</h3>
<p>The base URL for the site. When set to false, Kirby auto-detects the correct URL.</p>        </a>
</div>
</div>

</section>
<section class="text" id="page">
<h2 class="beta no-margin-bottom">$page</h2>

<div class="cheatsheet-grid">
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/archives">
<h3 class="gamma">$page-&gt;archives()</h3>
<p>Returns a $files collection with all archive files (zip, gzip, tar) in the page's directory</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/audio">
<h3 class="gamma">$page-&gt;audio()</h3>
<p>Returns a $files collection with all audio files in the page's directory</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/children">
<h3 class="gamma">$page-&gt;children()</h3>
<p>Returns a $pages collection with all children of the page</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/code">
<h3 class="gamma">$page-&gt;code()</h3>
<p>Returns a $files collection with all code files (css, js, html, etc.) in the page's directory</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/content">
<h3 class="gamma">$page-&gt;content([$lang = null])</h3>
<p>Returns the page's $content object</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/content-has-field">
<h3 class="gamma">$page-&gt;content()-&gt;has($field)</h3>
<p>Checks if the page has a certain field</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/content-url">
<h3 class="gamma">$page-&gt;contentURL()</h3>
<p>Returns the full URL for the content folder</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/create">
<h3 class="gamma">$page-&gt;create($uri, $template, $data = array())</h3>
<p>Creates a new page object</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/date">
<h3 class="gamma">$page-&gt;date($format = null, $field = 'date')</h3>
<p>Returns a unix timestamp or formatted date string from the page's date field or any other field containing a parsable date</p>        </a>
</div>
      <div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/delete">
<h3 class="gamma">$page-&gt;delete($force = false)</h3>
<p>Deletes the $page object and all its data and files. This cannot be undone!</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/depth">
<h3 class="gamma">$page-&gt;depth()</h3>
<p>Returns a number, which represents the nesting depth of the page</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/dirname">
<h3 class="gamma">$page-&gt;dirname()</h3>
<p>Returns the full name of the page's directory</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/diruri">
<h3 class="gamma">$page-&gt;diruri()</h3>
<p>Returns the full directory path of the page starting at /content</p>        </a>
</div>
      <div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/documents">
<h3 class="gamma">$page-&gt;documents()</h3>
<p>Returns a $files collection with all documents in the page's directory</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/equals">
<h3 class="gamma">$page-&gt;equals($other)</h3>
<p>Compares the page with another $page object and checks if they are the same</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/file">
<h3 class="gamma">$page-&gt;file($filename = false)</h3>
<p>Returns a specific $file object within the page's directory by filename. If no filename is given, the first file will be returned</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/files">
<h3 class="gamma">$page-&gt;files()</h3>
<p>Returns a $files collection with all files in the page's directory</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/find">
<h3 class="gamma">$page-&gt;find($uri)</h3>
<p>Returns the $page object of a specific subpage by URI. If multiple URIs are given, the method will return a $pages collection with all matches.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/grand-children">
<h3 class="gamma">$page-&gt;grandChildren()</h3>
<p>Returns a $pages collection with all children of children in the page's directory</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/has-archives">
<h3 class="gamma">$page-&gt;hasArchives()</h3>
<p>Checks if there are any archive files (zip, gzip, tar) in the page's directory</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/has-audio">
<h3 class="gamma">$page-&gt;hasAudio()</h3>
<p>Checks if there are any audio files in the page's directory</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/has-children">
<h3 class="gamma">$page-&gt;hasChildren()</h3>
<p>Checks if the page has children</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/has-code">
<h3 class="gamma">$page-&gt;hasCode()</h3>
<p>Checks if there are any audio files in the page's directory</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/has-documents">
<h3 class="gamma">$page-&gt;hasDocuments()</h3>
<p>Checks if there are any documents (pdf, doc, xls, etc.) in the page's directory</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/has-files">
<h3 class="gamma">$page-&gt;hasFiles()</h3>
<p>Checks if there are any files in the page's directory</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/has-images">
<h3 class="gamma">$page-&gt;hasImages()</h3>
<p>Checks if there are image files (jpg, png, gif, etc.) in the page directory</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/has-invisible-children">
<h3 class="gamma">$page-&gt;hasInvisibleChildren()</h3>
<p>Checks if the page has any invisible children</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/has-next">
<h3 class="gamma">$page-&gt;hasNext([$sort, $direction])</h3>
<p>Checks if the page has a next sibling</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/has-next-invisible">
<h3 class="gamma">$page-&gt;hasNextInvisible([$sort, $direction])</h3>
<p>Checks if the page has a next invisible sibling</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/has-next-visible">
<h3 class="gamma">$page-&gt;hasNextVisible([$sort, $direction])</h3>
<p>Checks if the page has a next visible sibling</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/has-prev">
<h3 class="gamma">$page-&gt;hasPrev([$sort, $direction])</h3>
<p>Checks if the page has a previous sibling</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/has-prev-invisible">
<h3 class="gamma">$page-&gt;hasPrevInvisible([$sort, $direction])</h3>
<p>Checks if the page has a previous invisible sibling</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/has-prev-visible">
<h3 class="gamma">$page-&gt;hasPrevVisible([$sort, $direction])</h3>
<p>Checks if the page has a previous visible sibling</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/has-template">
<h3 class="gamma">$page-&gt;hasTemplate()</h3>
<p>Checks if the page has its own template or if it uses the default template</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/has-videos">
<h3 class="gamma">$page-&gt;hasVideos()</h3>
<p>Checks if there are any video files in the page directory</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/has-visible-children">
<h3 class="gamma">$page-&gt;hasVisibleChildren()</h3>
<p>Checks if the page has any visible children</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/hash">
<h3 class="gamma">$page-&gt;hash()</h3>
<p>Returns a unique hash for the page, which is used by tinyurls</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/headers">
<h3 class="gamma">$page-&gt;headers()</h3>
<p>Sends all appropriate headers for this page. Can be configured with the headers config array, which should contain all header definitions for each template</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/hide">
<h3 class="gamma">$page-&gt;hide()</h3>
<p>Removes the sorting number from the page directory to switch it to invisible</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/id">
<h3 class="gamma">$page-&gt;id()</h3>
<p>Returns the page id, which is the untranslated URI</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/image">
<h3 class="gamma">$page-&gt;image($filename = false)</h3>
<p>Returns a specific image $file object by filename. If no filename is given, the first available image will be returned.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/images">
<h3 class="gamma">$page-&gt;images()</h3>
<p>Returns a $files collection with all image files (jpg, png, gif, etc.) in the page directory</p>        </a>
</div>
      <div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/index">
<h3 class="gamma">$page-&gt;index()</h3>
<p>Recursively builds a $pages collection with all children, children of children, etc.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/intended-template">
<h3 class="gamma">$page-&gt;intendedTemplate()</h3>
<p>Returns the name of the intended template. This is the name of the content text file.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/intendedTemplateFile">
<h3 class="gamma">$page-&gt;intendedTemplateFile()</h3>
<p>Returns the path for the intended template file</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/inventory">
<h3 class="gamma">$page-&gt;inventory()</h3>
<p>Reads the directory and returns an inventory array</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/is">
<h3 class="gamma">$page-&gt;is($other)</h3>
<p>Compares the page with another $page object and checks if they are the same</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/is-active">
<h3 class="gamma">$page-&gt;isActive()</h3>
<p>Checks if the page is the currently active page</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/is-ancestor-of">
<h3 class="gamma">$page-&gt;isAncestorOf($child)</h3>
<p>Checks if the page is a direct or indirect ancestor of the given $page object</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/is-cachable">
<h3 class="gamma">$page-&gt;isCacheable()</h3>
<p>Checks if the page can be cached</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/is-child-of">
<h3 class="gamma">$page-&gt;isChildOf($parent)</h3>
<p>Checks if the page is a child of the given page</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/is-deletable">
<h3 class="gamma">$page-&gt;isDeletable()</h3>
<p>Checks if the page is deletable</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/is-descendant-of">
<h3 class="gamma">$page-&gt;isDescendantOf($parent)</h3>
<p>Checks if the page is a descendant of the given page</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/is-descendant-of-active">
<h3 class="gamma">$page-&gt;isDescendantOfActive()</h3>
<p>Checks if the page is a descendant of the currently active page</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/is-error-page">
<h3 class="gamma">$page-&gt;isErrorPage()</h3>
<p>Checks if the page is the error page</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/is-home-page">
<h3 class="gamma">$page-&gt;isHomePage()</h3>
<p>Checks if the page is the home page</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/is-invisible">
<h3 class="gamma">$page-&gt;isInvisible()</h3>
<p>Checks if the page is invisible</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/is-open">
<h3 class="gamma">$page-&gt;isOpen()</h3>
<p>Checks if the page is open. This means that it is either active or it is a direct or indirect parent of the currently active page.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/is-parent-of">
<h3 class="gamma">$page-&gt;isParentOf($child)</h3>
<p>Checks if the page is the parent of the given page</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/is-site">
<h3 class="gamma">$page-&gt;isSite()</h3>
<p>Checks if this page object is the main site</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/is-visible">
<h3 class="gamma">$page-&gt;isVisible()</h3>
<p>Checks if the page is visible</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/is-writable">
<h3 class="gamma">$page-&gt;isWritable()</h3>
<p>Checks if the page is writable</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/kirby">
<h3 class="gamma">$page-&gt;kirby()</h3>
<p>Returns the kirby object</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/modified">
<h3 class="gamma">$page-&gt;modified($format = false)</h3>
<p>Returns the unix timestamp or a formatted date string of the last modification date of the page</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/move">
<h3 class="gamma">$page-&gt;move($uid)</h3>
<p>Changes the uid for the page</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/next">
<h3 class="gamma">$page-&gt;next([$sort, $direction])</h3>
<p>Returns the next sibling</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/next-invisible">
<h3 class="gamma">$page-&gt;nextInvisible([$sort, $direction])</h3>
<p>Returns the next invisible sibling</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/next-visible">
<h3 class="gamma">$page-&gt;nextVisible([$sort, $direction])</h3>
<p>Returns the next visible sibling</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/num">
<h3 class="gamma">$page-&gt;num()</h3>
<p>Returns the sorting number</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/parent">
<h3 class="gamma">$page-&gt;parent()</h3>
<p>Returns the parent $page object</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/parents">
<h3 class="gamma">$page-&gt;parents()</h3>
<p>Returns a $pages collection of all parents</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/prev">
<h3 class="gamma">$page-&gt;prev([$sort, $direction])</h3>
<p>Returns the previous sibling</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/prev-invisible">
<h3 class="gamma">$page-&gt;prevInvisible([$sort, $direction])</h3>
<p>Returns the previous invisble sibling.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/prev-visible">
<h3 class="gamma">$page-&gt;prevVisible([$sort, $direction])</h3>
<p>Returns the previous visible sibling</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/reset">
<h3 class="gamma">$page-&gt;reset()</h3>
<p>Cleans the temporary page cache and the cache of all parent pages</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/root">
<h3 class="gamma">$page-&gt;root()</h3>
<p>Returns the full root of the page directory</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/search">
<h3 class="gamma">$page-&gt;search($query, $params = array())</h3>
<p>Searches all descendants</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/siblings">
<h3 class="gamma">$page-&gt;siblings($self = true)</h3>
<p>Returns all siblings.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/site">
<h3 class="gamma">$page-&gt;site()</h3>
<p>Returns the site object</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/slug">
<h3 class="gamma">$page-&gt;slug([$lang = null])</h3>
<p>Returns the slug. The slug is the last part of the page's URL. It is translatable in multi-language sites while the UID always stays the page's directory name without the sorting number.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/sort">
<h3 class="gamma">$page-&gt;sort($num = null)</h3>
<p>Changes the sorting number of the page.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/template">
<h3 class="gamma">$page-&gt;template()</h3>
<p>Returns the name of the used template for the page. Will return default if the intended template cannot be found.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/template-data">
<h3 class="gamma">$page-&gt;templateData()</h3>
<p>Additional data, which will be passed to the template</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/templateFile">
<h3 class="gamma">$page-&gt;templateFile()</h3>
<p>Returns the full path of the template file.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/textfile">
<h3 class="gamma">$page-&gt;textfile($template = null [, $lang = null])</h3>
<p>Returns the root for the content file</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/tinyurl">
<h3 class="gamma">$page-&gt;tinyurl()</h3>
<p>Returns the tinyurl for the page if tinyurls are activated in the config</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/title">
<h3 class="gamma">$page-&gt;title()</h3>
<p>Returns the page title. The title is fetched from the content unless it does not exist. In this case it will be overwritten by the UID.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/to-array">
<h3 class="gamma">$page-&gt;toArray($callback = null)</h3>
<p>Converts the entire page object into a plain PHP array</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/to-json">
<h3 class="gamma">$page-&gt;toJson($callback = null)</h3>
<p>Converts the entire page array into a json string</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/touch">
<h3 class="gamma">$page-&gt;touch()</h3>
<p>Marks the page as modified</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/uid">
<h3 class="gamma">$page-&gt;uid()</h3>
<p>The UID is the page directory name without the sorting number.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/update">
<h3 class="gamma">$page-&gt;update($data = array() [, $lang = null])</h3>
<p>Updates the page content with all passed variables.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/uri">
<h3 class="gamma">$page-&gt;uri([$lang = null])</h3>
<p>Returns the URI. The URI is the relative URL without the host or any subfolders.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/url">
<h3 class="gamma">$page-&gt;url()</h3>
<p>Returns the full URL of the page</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/url-key">
<h3 class="gamma">$page-&gt;urlKey($lang = null)</h3>
<p>Returns the URL key from the content file if available and otherwise returns the page UID</p>        </a>
</div>
      <div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/page/videos">
<h3 class="gamma">$page-&gt;videos()</h3>
<p>Returns a $files collection with all videos in the page directory.</p>        </a>
</div>
</div>

</section>
<section class="text" id="pages">
<h2 class="beta no-margin-bottom">$pages</h2>
<div class="zeta subtitle">Inherits from <a href="https://getkirby.com/docs/toolkit/api/collection">Collection</a></div>

<div class="cheatsheet-grid">
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/add">
<h3 class="gamma">$pages-&gt;add($page)</h3>
<p>Adds a single page object or a collection to a collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/append">
<h3 class="gamma">$pages-&gt;append($key, $object)</h3>
<p>Appends an element to the data array</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/children">
<h3 class="gamma">$pages-&gt;children()</h3>
<p>Returns a $pages collection with all children of each page in the collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/count">
<h3 class="gamma">$pages-&gt;count()</h3>
<p>Returns the number of pages in the collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/create">
<h3 class="gamma">$pages-&gt;create($uid, $template, $data = array())</h3>
<p>Creates a new subpage</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/current">
<h3 class="gamma">$pages-&gt;current()</h3>
<p>Returns the current element of the array</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/extract-value">
<h3 class="gamma">pages::extractValue($item, $field)</h3>
<p>Makes sure to provide a valid value for each filter method no matter if an object or an array is given</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/files">
<h3 class="gamma">$pages-&gt;files()</h3>
<p>Returns a $files collection with all files of each page in the collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/filter">
<h3 class="gamma">$pages-&gt;filter($callback)</h3>
<p>Filters the collection with a custom filter callback</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/filter-by">
<h3 class="gamma">$pages-&gt;filterBy($key [,$operator], $value)</h3>
<p>Filters the collection by any field and value and with a set of filtering operators</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/find">
<h3 class="gamma">$pages-&gt;find($page)</h3>
<p>Finds a $page object in the collection by UID or relative URI</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/find-by">
<h3 class="gamma">$pages-&gt;findBy($key, $value)</h3>
<p>Finds a single $page object in the collection by $key and $value</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/find-by-uri">
<h3 class="gamma">$pages-&gt;findByURI($uri)</h3>
<p>Finds a $page object in the collection by its full URI</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/find-open">
<h3 class="gamma">$pages-&gt;findOpen()</h3>
<p>Finds the open $page object in the collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/first">
<h3 class="gamma">$pages-&gt;first()</h3>
<p>Returns the first $page object from the collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/flip">
<h3 class="gamma">$pages-&gt;flip()</h3>
<p>Returns the collection in reverse order</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/get">
<h3 class="gamma">$pages-&gt;get($key, $default = null)</h3>
<p>Returns a $page object by its full URI</p>        </a>
</div>
      <div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/group-by">
<h3 class="gamma">$pages-&gt;groupBy($field, $caseInsensitive = true)</h3>
<p>Groups $page objects in the collection by any field and returns them in a new collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/has">
<h3 class="gamma">$pages-&gt;has($page)</h3>
<p>Checks if a $page object is included in the collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/index">
<h3 class="gamma">$pages-&gt;index()</h3>
<p>Recursively creates a full index from all pages and subpages in the collection and returns it as a new flat $pages collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/index-of">
<h3 class="gamma">$pages-&gt;indexOf($needle)</h3>
<p>Tries to find the index number for the given element</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/invisible">
<h3 class="gamma">$pages-&gt;invisible()</h3>
<p>Returns all invisible $page objects from the collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/key">
<h3 class="gamma">$pages-&gt;key()</h3>
<p>Returns the current key from the array</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/key-of">
<h3 class="gamma">$pages-&gt;keyOf($needle)</h3>
<p>Tries to find the key for the given element</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/keys">
<h3 class="gamma">$pages-&gt;keys()</h3>
<p>Returns all keys/URIs from the collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/last">
<h3 class="gamma">$pages-&gt;last()</h3>
<p>Returns the last $page object from the collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/limit">
<h3 class="gamma">$pages-&gt;limit($limit)</h3>
<p>Returns the collection with a limited amount of pages</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/map">
<h3 class="gamma">$pages-&gt;map($callback)</h3>
<p>Returns a new collection and applies the mapping callback to all pages</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/merge">
<h3 class="gamma">$pages-&gt;merge($collection2)</h3>
<p>Returns a new combined collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/next">
<h3 class="gamma">$pages-&gt;next()</h3>
<p>Moves the cursor to the next element in the array and returns it</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/not">
<h3 class="gamma">$pages-&gt;not($args)</h3>
<p>Returns the collection without any given pages.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/nth">
<h3 class="gamma">$pages-&gt;nth($n)</h3>
<p>Returns the nth page in the collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/offset">
<h3 class="gamma">$pages-&gt;offset($offset)</h3>
<p>Returns the collection starting from the given offset</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/paginate">
<h3 class="gamma">$pages-&gt;paginate($limit, $options = array())</h3>
<p>Adds a $pagination object to the collection, which makes it easy to page through items</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/pagination">
<h3 class="gamma">$pages-&gt;pagination()</h3>
<p>Returns the $pagination object if available</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/pluck">
<h3 class="gamma">$pages-&gt;pluck($field, $split = null, $unique = false)</h3>
<p>Extracts an array of values from each item by field</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/prepend">
<h3 class="gamma">$pages-&gt;prepend($key, $object)</h3>
<p>Prepends an element to the data array</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/prev">
<h3 class="gamma">$pages-&gt;prev()</h3>
<p>Moves the cursor to the previous element in the array and returns it</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/rewind">
<h3 class="gamma">$pages-&gt;rewind()</h3>
<p>Moves the cursor to the first element of the array</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/search">
<h3 class="gamma">$pages-&gt;search($query, $params = array())</h3>
<p>Searches all pages in the collection and all descendants</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/set">
<h3 class="gamma">$pages-&gt;set($key, $value)</h3>
</a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/shuffle">
<h3 class="gamma">$pages-&gt;shuffle()</h3>
<p>Shuffles all items in the collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/slice">
<h3 class="gamma">$pages-&gt;slice($offset = null, $limit = null)</h3>
<p>Returns a sliced version of the collection defined by offset and limit</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/sort-by">
<h3 class="gamma">$pages-&gt;sortBy($field, $direction = 'asc', $method = SORT_REGULAR)</h3>
<p>Returns a sorted version of the collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/to-array">
<h3 class="gamma">$pages-&gt;toArray($callback = null)</h3>
<p>Converts the collection to a good old array. You can pass a callback which will be applied to all items in the collection before conversion</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/to-json">
<h3 class="gamma">$pages-&gt;toJson()</h3>
<p>Converts the collection to a JSON string</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/valid">
<h3 class="gamma">$pages-&gt;valid()</h3>
<p>Checks if an element is valid This is needed for the Iterator implementation</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/visible">
<h3 class="gamma">$pages-&gt;visible()</h3>
<p>Returns all visible items in the collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pages/without">
<h3 class="gamma">$pages-&gt;without($args)</h3>
<p>Returns a new collection without the given element(s)</p>        </a>
</div>
</div>

</section>
<section class="text" id="pagination">
<h2 class="beta no-margin-bottom">$pagination</h2>

<div class="cheatsheet-grid">
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pagination/first-page">
<h3 class="gamma">$pagination-&gt;firstPage()</h3>
<p>Returns the first page number — which is actually always 1.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pagination/first-page-url">
<h3 class="gamma">$pagination-&gt;firstPageUrl()</h3>
<p>Returns the absolute URL for the first page</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pagination/has-next-page">
<h3 class="gamma">$pagination-&gt;hasNextPage()</h3>
<p>Checks if there's a next available page</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pagination/has-pages">
<h3 class="gamma">$pagination-&gt;hasPages()</h3>
<p>Checks if there are any pages at all. This is useful if you want to show/hide the pagination.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pagination/has-prev-page">
<h3 class="gamma">$pagination-&gt;hasPrevPage()</h3>
<p>Checks if there is a previous page</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pagination/is-first-page">
<h3 class="gamma">$pagination-&gt;isFirstPage()</h3>
<p>Checks if the current page is the first page</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pagination/is-last-page">
<h3 class="gamma">$pagination-&gt;isLastPage()</h3>
<p>Checks if the current page is the last page</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pagination/items">
<h3 class="gamma">$pagination-&gt;items()</h3>
<p>Returns the total number of items</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pagination/last-page">
<h3 class="gamma">$pagination-&gt;lastPage()</h3>
<p>Returns the last page number</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pagination/last-page-url">
<h3 class="gamma">$pagination-&gt;lastPageUrl()</h3>
<p>Returns the absolute URL for the last page</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pagination/limit">
<h3 class="gamma">$pagination-&gt;limit()</h3>
<p>Returns the limit of items per page</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pagination/next-page">
<h3 class="gamma">$pagination-&gt;nextPage()</h3>
<p>Returns the next page number</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pagination/next-page-url">
<h3 class="gamma">$pagination-&gt;nextPageUrl()</h3>
<p>Returns the absolute URL for the next page</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pagination/num-end">
<h3 class="gamma">$pagination-&gt;numEnd()</h3>
<p>Returns the index number of the last item on the current page</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pagination/num-start">
<h3 class="gamma">$pagination-&gt;numStart()</h3>
<p>Returns the index number of the first item on the current page</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pagination/offset">
<h3 class="gamma">$pagination-&gt;offset()</h3>
<p>Returns the offset, which is being applied to the items collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pagination/page">
<h3 class="gamma">$pagination-&gt;page()</h3>
<p>Returns the current page number</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pagination/page-url">
<h3 class="gamma">$pagination-&gt;pageUrl($page)</h3>
<p>Returns the absolute URL for the given page</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pagination/pages">
<h3 class="gamma">$pagination-&gt;pages()</h3>
<p>Returns the total number of available pages</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pagination/prev-page">
<h3 class="gamma">$pagination-&gt;prevPage()</h3>
<p>Returns the previous page number</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pagination/prev-page-url">
<h3 class="gamma">$pagination-&gt;prevPageUrl()</h3>
<p>Returns the absolute URL for the previous page</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pagination/range">
<h3 class="gamma">$pagination-&gt;range($range=5)</h3>
<p>Returns an array of page numbers in a range of the given value.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pagination/range-end">
<h3 class="gamma">$pagination-&gt;rangeEnd()</h3>
<p>Returns the page number at the end of the range</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pagination/range-start">
<h3 class="gamma">$pagination-&gt;rangeStart()</h3>
<p>Returns the page number at the beginning of the range</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/pagination/to-array">
<h3 class="gamma">$pagination-&gt;toArray()</h3>
<p>Returns the pagination object as an associative array.</p>        </a>
</div>
</div>

</section>
<section class="text" id="panel-fields">
<h2 class="beta no-margin-bottom">Panel field types</h2>

<div class="cheatsheet-grid">
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/panel-fields/checkbox">
<h3 class="gamma">Checkbox</h3>
<p>A single checkbox field</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/panel-fields/checkboxes">
<h3 class="gamma">Checkboxes</h3>
<p>A list of checkbox fields</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/panel-fields/date">
<h3 class="gamma">Date</h3>
<p>A date picker field</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/panel-fields/datetime">
<h3 class="gamma">Datetime</h3>
<p>A date and time picker field</p>        </a>
    </div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/panel-fields/email">
<h3 class="gamma">Email</h3>
<p>An email input field with autocompletion and validation</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/panel-fields/headline">
<h3 class="gamma">Headline</h3>
<p>Creates a headline to group fields</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/panel-fields/hidden">
<h3 class="gamma">Hidden</h3>
<p>Creates a hidden field</p>        </a>
</div>
      <div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/panel-fields/info">
<h3 class="gamma">Info</h3>
<p>A plain HTML field for user instructions</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/panel-fields/line">
<h3 class="gamma">Line</h3>
<p>Draws a horizontal line to separate fields</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/panel-fields/number">
<h3 class="gamma">Number</h3>
<p>A number input field with validation</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/panel-fields/page">
<h3 class="gamma">Page</h3>
<p>A single page input with autocompletion</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/panel-fields/radiobuttons">
<h3 class="gamma">Radiobuttons</h3>
<p>A list of radio buttons</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/panel-fields/select">
<h3 class="gamma">Select</h3>
<p>A simple selectbox field</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/panel-fields/structure">
<h3 class="gamma">Structure</h3>
<p>Structured data input, which stores data in a field as YAML.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/panel-fields/tags">
<h3 class="gamma">Tags</h3>
<p>An interactive tags input field with autocompletion</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/panel-fields/tel">
<h3 class="gamma">Tel</h3>
<p>A phone number input field</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/panel-fields/text">
<h3 class="gamma">Text</h3>
<p>A standard, single-line input field</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/panel-fields/textarea">
<h3 class="gamma">Textarea</h3>
<p>A textarea field, which auto-resizes and has built-in format buttons.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/panel-fields/time">
<h3 class="gamma">Time</h3>
<p>A time picker field</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/panel-fields/toggle">
<h3 class="gamma">Toggle</h3>
<p>Yes/no or on/off toggle</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/panel-fields/url">
<h3 class="gamma">Url</h3>
<p>A URL input field with validation</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/panel-fields/user">
<h3 class="gamma">User</h3>
<p>A user input field with autocompletion for registered users.</p>        </a>
</div>
</div>

</section>
<section class="text" id="request">
<h2 class="beta no-margin-bottom">$request</h2>

<div class="cheatsheet-grid">
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/request/ajax">
<h3 class="gamma">$request-&gt;ajax()</h3>
<p>Checks if this request is an Ajax request</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/request/body">
<h3 class="gamma">$request-&gt;body()</h3>
<p>Returns the raw request body</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/request/cli">
<h3 class="gamma">$request-&gt;cli()</h3>
<p>Checks if this request is comming from the command line</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/request/data">
<h3 class="gamma">$request-&gt;data()</h3>
<p>Returns an array of request data coming through the query and the post body.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/request/files">
<h3 class="gamma">$request-&gt;files()</h3>
<p>Returns the $_FILES array</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/request/get">
<h3 class="gamma">$request-&gt;get($key, $default = null)</h3>
<p>Returns any value of the request data by key</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/request/has">
<h3 class="gamma">$request-&gt;has($key)</h3>
<p>Checks if a value is available in the request data</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/request/ip">
<h3 class="gamma">$request-&gt;ip()</h3>
<p>Returns the IP address of the current visitor</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/request/is">
<h3 class="gamma">$request-&gt;is()</h3>
<p>Checks for the type of method</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/request/method">
<h3 class="gamma">$request-&gt;method()</h3>
<p>Returns the request method (GET, POST, DELETE, etc.)</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/request/params">
<h3 class="gamma">$request-&gt;params()</h3>
<p>Returns all params from the URL in a handy object</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/request/path">
<h3 class="gamma">$request-&gt;path()</h3>
<p>Returns the path in the current URL as object</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/request/query">
<h3 class="gamma">$request-&gt;query()</h3>
<p>Returns the query from the current URL as object</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/request/referer">
<h3 class="gamma">$request-&gt;referer()</h3>
<p>Returns the referer. Also available with to "rr"</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/request/scheme">
<h3 class="gamma">$request-&gt;scheme()</h3>
<p>Returns the URL scheme (http, https, ftp, etc.)</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/request/secure">
<h3 class="gamma">$request-&gt;secure()</h3>
<p>Checks if this is a secure request (SSL)</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/request/ssl">
<h3 class="gamma">$request-&gt;ssl()</h3>
<p>Checks if this is an SSL request</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/request/url">
<h3 class="gamma">$request-&gt;url()</h3>
<p>Returns the complete URL for the current request</p>        </a>
</div>
</div>

</section>
<section class="text" id="roots">
<h2 class="beta no-margin-bottom">$roots</h2>

<div class="cheatsheet-grid">
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/roots/accounts">
<h3 class="gamma">$roots-&gt;accounts()</h3>
<p>Returns the root of the accounts folder.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/roots/assets">
<h3 class="gamma">$roots-&gt;assets()</h3>
<p>Returns the root of the assets folder.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/roots/autocss">
<h3 class="gamma">$roots-&gt;autocss()</h3>
<p>Returns the root of the autocss folder for the <code>css('@auto')</code> rule.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/roots/autojs">
<h3 class="gamma">$roots-&gt;autojs()</h3>
<p>Returns the root of the autojs folder for the <code>js('@auto')</code> rule.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/roots/avatars">
<h3 class="gamma">$roots-&gt;avatars()</h3>
<p>Returns the root of the avatars folder.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/roots/blueprints">
<h3 class="gamma">$roots-&gt;blueprints()</h3>
<p>Returns the root of the blueprints folder</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/roots/cache">
<h3 class="gamma">$roots-&gt;cache()</h3>
<p>Returns the root of the cache folder.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/roots/config">
<h3 class="gamma">$roots-&gt;config()</h3>
<p>Returns the root of the config folder.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/roots/content">
<h3 class="gamma">$roots-&gt;content()</h3>
<p>Returns the root of the content folder</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/roots/controllers">
<h3 class="gamma">$roots-&gt;controllers()</h3>
<p>Returns the root of the controllers folder.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/roots/fields">
<h3 class="gamma">$roots-&gt;fields()</h3>
<p>Returns the root of the Panel fields folder.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/roots/index">
<h3 class="gamma">$roots-&gt;index()</h3>
<p>Returns the document root of the website</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/roots/kirby">
<h3 class="gamma">$roots-&gt;kirby()</h3>
<p>Returns the root of the Kirby core folder</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/roots/languages">
<h3 class="gamma">$roots-&gt;languages()</h3>
<p>Returns the root of the languages folder for custom site localizations</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/roots/models">
<h3 class="gamma">$roots-&gt;models()</h3>
<p>Returns the root of the folder for page models</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/roots/plugins">
<h3 class="gamma">$roots-&gt;plugins()</h3>
<p>Returns the root of the plugins folder.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/roots/site">
<h3 class="gamma">$roots-&gt;site()</h3>
<p>Returns the root of the site folder</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/roots/snippets">
<h3 class="gamma">$roots-&gt;snippets()</h3>
<p>Returns the root of the snippets folder.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/roots/tags">
<h3 class="gamma">$roots-&gt;tags()</h3>
<p>Returns the root of the Kirbytags folder</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/roots/templates">
<h3 class="gamma">$roots-&gt;templates()</h3>
<p>Returns the root of the templates folder.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/roots/thumbs">
<h3 class="gamma">$roots-&gt;thumbs()</h3>
<p>Returns the root of the thumbs folder.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/roots/widgets">
<h3 class="gamma">$roots-&gt;widgets()</h3>
<p>Returns the root of the Panel widgets folder.</p>        </a>
</div>
</div>

</section>
<section class="text" id="site">
<h2 class="beta no-margin-bottom">$site</h2>

<div class="cheatsheet-grid">
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/active-page">
<h3 class="gamma">$site-&gt;activePage()</h3>
<p>Returns the currently active page object</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/archives">
<h3 class="gamma">$site-&gt;archives()</h3>
<p>Returns a $files collection with all archive files (zip, gzip, tar) placed directly in /content</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/audio">
<h3 class="gamma">$site-&gt;audio()</h3>
<p>Returns a $files collection with all audio files placed directly in /content</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/breadcrumb">
<h3 class="gamma">$site-&gt;breadcrumb()</h3>
<p>Returns a $pages collection, prepared for a foreach loop to generate a breadcrumb</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/children">
<h3 class="gamma">$site-&gt;children()</h3>
<p>Returns a $pages collection with all first-level children in the content folder</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/code">
<h3 class="gamma">$site-&gt;code()</h3>
<p>Returns a $files collection with all code files (css, js, html) placed directly in /content</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/content">
<h3 class="gamma">$site-&gt;content()</h3>
<p>Returns the $content object for the site, which can be used to further inspect all content variables for $site</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/content-has-field">
<h3 class="gamma">$site-&gt;content()-&gt;has($field)</h3>
<p>Checks if the site has a certain field</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/content-url">
<h3 class="gamma">$site-&gt;contentURL()</h3>
<p>Returns the full URL for the content folder</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/default-language">
<h3 class="gamma">$site-&gt;defaultLanguage()</h3>
<p>Returns the $language object for the default language</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/detected-language">
<h3 class="gamma">$site-&gt;detectedLanguage()</h3>
<p>Returns the detected language</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/diruri">
<h3 class="gamma">$site-&gt;diruri()</h3>
<p>The base diruri is basically just an empty string</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/documents">
<h3 class="gamma">$site-&gt;documents()</h3>
<p>Returns a $files collection with all documents (pdf, doc, xls, etc.) placed directly in /content</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/error-page">
<h3 class="gamma">$site-&gt;errorPage()</h3>
<p>Returns the $page object for the error page.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/file">
<h3 class="gamma">$site-&gt;file($filename)</h3>
<p>Searches for a specific file placed directly in /content by filename</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/files">
<h3 class="gamma">$site-&gt;files()</h3>
<p>Returns a $files collection with all files placed directly in /content</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/find">
<h3 class="gamma">$site-&gt;find($uri)</h3>
<p>Finds a single $page object or a collection of $pages placed directly in /content by a single UID or a set of multiple UIDs.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/grand-children">
<h3 class="gamma">$site-&gt;grandChildren()</h3>
<p>Returns a $pages collection with all grandChildren in the /content directory</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/has-archives">
<h3 class="gamma">$site-&gt;hasArchives()</h3>
<p>Checks if there are any archive files (zip, gzip, tar) placed directly in /content</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/has-audio">
<h3 class="gamma">$site-&gt;hasAudio()</h3>
<p>Checks if there are any audio files placed directly in /content</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/has-children()">
<h3 class="gamma">$site-&gt;hasChildren()</h3>
<p>Checks if there are any children placed directly in /content</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/has-code">
<h3 class="gamma">$site-&gt;hasCode()</h3>
<p>Checks if there are any code files placed directly in /content</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/has-documents">
<h3 class="gamma">$site-&gt;hasDocuments()</h3>
<p>Checks if there are any documents (pdf, doc, xls, etc.) placed directly in /content</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/has-files">
<h3 class="gamma">$site-&gt;hasFiles()</h3>
<p>Checks if there are any files placed directly in /content</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/has-images">
<h3 class="gamma">$site-&gt;hasImages()</h3>
<p>Checks if there are any images (jpg, png, gif, etc.) placed directly in /content</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/has-invisible-children">
<h3 class="gamma">$site-&gt;hasInvisibleChildren()</h3>
<p>Checks if there are any invisible children placed directly in /content</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/has-videos">
<h3 class="gamma">$site-&gt;hasVideos()</h3>
<p>Checks if there are any videos placed directly in /content</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/has-visible-children">
<h3 class="gamma">$site-&gt;hasVisibleChildren()</h3>
<p>Checks if there are any visible children placed directly in /content</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/home-page">
<h3 class="gamma">$site-&gt;homePage()</h3>
<p>Returns the $page object for the home page</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/id">
<h3 class="gamma">$site-&gt;id()</h3>
<p>Returns the site id, which is an empty string in case of the site object</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/image">
<h3 class="gamma">$site-&gt;image($filename = false)</h3>
<p>Returns a specific image $file object by filename. If no filename is given, the first image will be returned.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/images">
<h3 class="gamma">$site-&gt;images()</h3>
<p>Returns a $files collection with all images (jpg, png, gif, etc.) placed directly in /content</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/index">
<h3 class="gamma">$site-&gt;index()</h3>
<p>Creates a $pages collection with every page and subpage in /content. This will walk the entire file tree.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/is-site">
<h3 class="gamma">$site-&gt;isSite()</h3>
<p>Checks if this site object is the main site</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/language">
<h3 class="gamma">$site-&gt;language($code = null)</h3>
<p>Returns the current language by default or any other language when a language code is given</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/languages">
<h3 class="gamma">$site-&gt;languages()</h3>
<p>Returns the collection of available languages for multi-language sites</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/locale">
<h3 class="gamma">$site-&gt;locale()</h3>
<p>Returns the locale settings for the site</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/modified">
<h3 class="gamma">$site-&gt;modified($format = false)</h3>
<p>Returns the last modification date for the site. This will walk all pages and subpages and search for the very last modification.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/multilang">
<h3 class="gamma">$site-&gt;multilang()</h3>
<p>Checks if there are one or more languages configured in the config.php</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/page">
<h3 class="gamma">$site-&gt;page($uri = null)</h3>
<p>Returns a specific $page object by URI. If no URI is specified the currently active page will be returned.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/pages">
<h3 class="gamma">$site-&gt;pages()</h3>
<p>Returns a $pages collection for all direct children in /content. It's an old version of $site-&gt;children()</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/reset">
<h3 class="gamma">$site-&gt;reset()</h3>
<p>Cleans the temporary internal cache</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/roles">
<h3 class="gamma">$site-&gt;roles()</h3>
<p>Returns a collection of all roles</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/search">
<h3 class="gamma">$site-&gt;search($query, $params = array())</h3>
<p>Searches within all pages of the site</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/session-language">
<h3 class="gamma">$site-&gt;sessionLanguage()</h3>
<p>Returns the language which will be remembered for the next visit</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/switch-language">
<h3 class="gamma">$site-&gt;switchLanguage(Language $language)</h3>
<p>Redirects to the given language</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/update">
<h3 class="gamma">$site-&gt;update($data = array())</h3>
<p>Updates all given site variables, which are stored in site.txt</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/url">
<h3 class="gamma">$site-&gt;url([$lang=false])</h3>
<p>Returns the base URL for the site</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/user">
<h3 class="gamma">$site-&gt;user()</h3>
<p>Returns the currently logged in $user object. If no user is logged in, it will return false.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/users">
<h3 class="gamma">$site-&gt;users()</h3>
<p>Returns a $users collection with all registered users.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/videos">
<h3 class="gamma">$site-&gt;videos()</h3>
<p>Returns a $files collection with all video files placed directly in /content</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/visit">
<h3 class="gamma">$site-&gt;visit($uri = '' [, $lang])</h3>
<p>Activates the specified page and returns its page object</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/visitor-language">
<h3 class="gamma">$site-&gt;visitorLanguage()</h3>
<p>Tries to find the language for the current visitor</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/site/was-modified-after">
<h3 class="gamma">$site-&gt;wasModifiedAfter()</h3>
<p>Checks if any content of the site has been modified after the given unix timestamp</p>        </a>
</div>
</div>

</section>
<section class="text" id="urls">
<h2 class="beta no-margin-bottom">$urls</h2>

<div class="cheatsheet-grid">
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/urls/assets">
<h3 class="gamma">$urls-&gt;assets()</h3>
<p>Returns the url of the assets folder</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/urls/autocss">
<h3 class="gamma">$urls-&gt;autocss()</h3>
<p>Returns the url of the autocss folder for the <code>css('@auto')</code> rule.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/urls/autojs">
<h3 class="gamma">$urls-&gt;autojs()</h3>
<p>Returns the url of the autojs folder for the <code>js('@auto')</code> rule.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/urls/avatars">
<h3 class="gamma">$urls-&gt;avatars()</h3>
<p>Returns the url of the avatars folder</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/urls/content">
<h3 class="gamma">$urls-&gt;content()</h3>
<p>Returns the url of the content folder</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/urls/index">
<h3 class="gamma">$urls-&gt;index()</h3>
<p>Returns the base url of the site</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/urls/thumbs">
<h3 class="gamma">$urls-&gt;thumbs()</h3>
<p>Returns the URL of the thumbs folder</p>        </a>
</div>
</div>

</section>
<section class="text" id="user">
<h2 class="beta no-margin-bottom">$user</h2>

<div class="cheatsheet-grid">
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/user/avatar">
<h3 class="gamma">$user-&gt;avatar()</h3>
<p>Returns the user avatar object if the avatar exists</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/user/avatar-root">
<h3 class="gamma">$user-&gt;avatarRoot()</h3>
<p>Returns the full root for the user avatar image</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/user/current">
<h3 class="gamma">$user-&gt;current()</h3>
<p>Returns the current user</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/user/data">
<h3 class="gamma">$user-&gt;data()</h3>
<p>Returns an array with all user data</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/user/delete">
<h3 class="gamma">$user-&gt;delete()</h3>
<p>Deletes the user account. This cannot be undone</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/user/email">
<h3 class="gamma">$user-&gt;email()</h3>
<p>Returns the email address for the user</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/user/exists">
<h3 class="gamma">$user-&gt;exists()</h3>
<p>Checks if the user exists</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/user/firstname">
<h3 class="gamma">$user-&gt;firstName()</h3>
<p>Returns the user's first name</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/user/gravatar">
<h3 class="gamma">$user-&gt;gravatar($size = 256)</h3>
<p>Returns the gravatar URL for the user.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/user/has-panel-access">
<h3 class="gamma">$user-&gt;hasPanelAccess()</h3>
<p>Checks if the user is allowed to acces the panel based on its role.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/user/has-permission">
<h3 class="gamma">$user-&gt;hasPermission($target)</h3>
<p>Checks if the user is allowed to access the given target</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/user/has-role">
<h3 class="gamma">$user-&gt;hasRole($role)</h3>
<p>Checks if the user has a particular role.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/user/is">
<h3 class="gamma">$user-&gt;is($someone)</h3>
<p>Checks if the user is the same as the given $user object</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/user/is-admin">
<h3 class="gamma">$user-&gt;isAdmin()</h3>
<p>Checks if the user is an admin</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/user/is-current">
<h3 class="gamma">$user-&gt;isCurrent()</h3>
<p>Checks if the user is the currently logged in user.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/user/lastname">
<h3 class="gamma">$user-&gt;lastName()</h3>
<p>Returns the user's last name</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/user/login">
<h3 class="gamma">$user-&gt;login($password)</h3>
<p>Login the user with the given password if the password matches the user's password.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/user/logout">
<h3 class="gamma">$user-&gt;logout()</h3>
<p>Logs out the user and kills the session.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/user/role">
<h3 class="gamma">$user-&gt;role()</h3>
<p>Returns the user role</p>        </a>
</div>
      <div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/user/update">
<h3 class="gamma">$user-&gt;update($data = array())</h3>
<p>Updates the user account information.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/user/username">
<h3 class="gamma">$user-&gt;username()</h3>
<p>Returns the username</p>        </a>
</div>
</div>

</section>
<section class="text" id="users">
<h2 class="beta no-margin-bottom">$users</h2>

<div class="cheatsheet-grid">
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/users/count">
<h3 class="gamma">$users-&gt;count()</h3>
<p>Returns the number of all users</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/users/create">
<h3 class="gamma">$users-&gt;create($data = array())</h3>
<p>Creates a new user account</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/users/filter">
<h3 class="gamma">$users-&gt;filter($callback)</h3>
<p>Filters the collection of users by a given callback function</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/users/filterBy">
<h3 class="gamma">$users-&gt;filterBy($field, $value)</h3>
<p>Filters the collection of users by field and value</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/users/find">
<h3 class="gamma">$users-&gt;find($username)</h3>
<p>Finds a single user account by username</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/users/findBy">
<h3 class="gamma">$users-&gt;findBy($field, $value)</h3>
<p>Finds a single user account by field and value</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/users/first">
<h3 class="gamma">$users-&gt;first()</h3>
<p>Returns the first $user object from the collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/users/flip">
<h3 class="gamma">$users-&gt;flip()</h3>
<p>Returns the $users collection in reversed order</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/users/get">
<h3 class="gamma">$users-&gt;get($username)</h3>
<p>Returns a single $user object by username</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/users/groupBy">
<h3 class="gamma">$users-&gt;groupBy($field, $caseInsensitive = true)</h3>
<p>Groups users in the collection by a given field.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/users/has">
<h3 class="gamma">$users-&gt;has($user)</h3>
<p>Checks if a $user object is included in the collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/users/keys">
<h3 class="gamma">$users-&gt;keys()</h3>
<p>Returns all usernames/keys in the collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/users/last">
<h3 class="gamma">$users-&gt;last()</h3>
<p>Returns the last $user object from the collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/users/limit">
<h3 class="gamma">$users-&gt;limit($limit)</h3>
<p>Returns a limited subset of the collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/users/map">
<h3 class="gamma">$users-&gt;map($callback)</h3>
<p>Maps a callback function to all $user objects in the collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/users/not">
<h3 class="gamma">$users-&gt;not()</h3>
<p>Returns the $users collection without the given usernames or $user objects</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/users/nth">
<h3 class="gamma">$users-&gt;nth($n)</h3>
<p>Returns the nth $user in the collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/users/offset">
<h3 class="gamma">$users-&gt;offset($offset)</h3>
<p>Returns the $users collection starting form the given offset</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/users/paginate">
<h3 class="gamma">$users-&gt;paginate($limit, $options = array())</h3>
<p>Applies pagination to the collection</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/users/pagination">
<h3 class="gamma">$users-&gt;pagination()</h3>
<p>Returns the pagination object after using $users-&gt;paginate()</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/users/pluck">
<h3 class="gamma">$users-&gt;pluck($field, $split = null, $unique = false)</h3>
<p>Plucks all values for a specific field from the collection and returns those as array.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/users/shuffle">
<h3 class="gamma">$users-&gt;shuffle()</h3>
<p>Returns the collection in shuffled order</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/users/slice">
<h3 class="gamma">$users-&gt;slice($offset = null, $limit = null)</h3>
<p>Returns a sliced version of the collection starting with the offset and limited by the given limit value.</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/users/sortBy">
<h3 class="gamma">$users-&gt;sortBy($field, $direction = 'desc', $method = SORT_REGULAR)</h3>
<p>Sort the collection by one or multiple fields</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/users/to-array">
<h3 class="gamma">$users-&gt;toArray($callback = null)</h3>
<p>Converts the collection to a mult-dimensional array</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/users/to-json">
<h3 class="gamma">$users-&gt;toJson()</h3>
<p>Converts the collection to a json string</p>        </a>
</div>
</div>

</section>
<section class="text" id="validators">
<h2 class="beta no-margin-bottom">Validators</h2>

<div class="cheatsheet-grid">
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/validators/alpha">
<h3 class="gamma">Alpha</h3>
<p>Valid: A-Z</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/validators/alphanum">
<h3 class="gamma">Alphanum</h3>
<p>Valid: A-Z and 0-9</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/validators/between">
<h3 class="gamma">Between</h3>
<p>Checks for numbers within a given range</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/validators/date">
<h3 class="gamma">Date</h3>
<p>Checks for a valid date</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/validators/different">
<h3 class="gamma">Different</h3>
<p>Checks for a value, which does not equal the given value</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/validators/email">
<h3 class="gamma">Email</h3>
<p>Checks for valid email addresses</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/validators/filename">
<h3 class="gamma">Filename</h3>
<p>Checks for valid filenames</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/validators/in">
<h3 class="gamma">In</h3>
<p>Checks if the value exists in a given array</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/validators/integer">
<h3 class="gamma">Integer</h3>
<p>Checks for a valid integer value</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/validators/ip">
<h3 class="gamma">IP</h3>
<p>Checks for a valid IP address</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/validators/match">
<h3 class="gamma">Match</h3>
<p>Checks if the value matches a given regular expression</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/validators/max">
<h3 class="gamma">Max</h3>
<p>Checks if the value equals or is below the given maximum</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/validators/min">
<h3 class="gamma">Min</h3>
<p>Checks for a value that is greater or equals the given minimum</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/validators/notin">
<h3 class="gamma">NotIn</h3>
<p>Validates that a value is not included in the given array</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/validators/num">
<h3 class="gamma">Num</h3>
<p>Checks for a valid number</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/validators/same">
<h3 class="gamma">Same</h3>
<p>Checks if the value equals another given value</p>        </a>
</div>
<div class="cheatsheet-grid-item">
<a href="https://getkirby.com/docs/cheatsheet/validators/size">
<h3 class="gamma">Size</h3>
<p>Checks if the value matches a given size</p>        </a>
</div>
</div>

</section>

</body>
</html>
