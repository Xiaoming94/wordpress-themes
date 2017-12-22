# Defining Macros

CSS_CC=sassc
CSS_FLAGS=-I
CSS_SRC_DIR=sass
CSS_SRC_MAIN=$(CSS_SRC_DIR)/style.scss
CSS_OUTPUT_FILE=style.css
CSS_INCLUDE_PATHS=$(CSS_FLAGS) "./bower_components/foundation-sites/scss"
CSS_TARGET=$(CSS_CC) $(CSS_INCLUDE_PATHS)\
             $(CSS_SRC_MAIN) $(CSS_OUTPUT_FILE)

JS_JQUERY_SRC=./bower_components/jquery/dist/jquery.js
JS_FOUNDATION_SRC=./bower_components/foundation-sites/dist/js/foundation.js
JS_SOURCE_FILES=./js/src/main.js
JS_OUTPUT_FILE=./js/scripts.js
JS_TARGET=cat $(JS_JQUERY_SRC) $(JS_FOUNDATION_SRC) $(JS_SOURCE_FILES) > $(JS_OUTPUT_FILE)

style:
	$(CSS_TARGET)

javascript:
	$(JS_TARGET)

build: style javascript
