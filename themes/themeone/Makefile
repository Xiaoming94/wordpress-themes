# Defining Macros

CSS_CC=sassc
CSS_FLAGS=
CSS_SRC_DIR=sass
CSS_SRC_MAIN=$(CSS_SRC_DIR)/style.scss
CSS_OUTPUT_FILE=style.css
CSS_FOUNDATION_PATH="./bower_components/foundation-sites/scss"
CSS_MOTION_UI_PATH="./bower_components/motion-ui/src/"
CSS_INCLUDE_PATHS=-I $(CSS_FOUNDATION_PATH) -I $(CSS_MOTION_UI_PATH)
CSS_TARGET=$(CSS_CC) $(CSS_INCLUDE_PATHS)\
             $(CSS_FLAGS) $(CSS_SRC_MAIN) $(CSS_OUTPUT_FILE)

JS_JQUERY_SRC=./bower_components/jquery/dist/jquery.js
JS_FOUNDATION_SRC=./bower_components/foundation-sites/dist/js/foundation.js
JS_SOURCE_FILES=./js/src/main.js
JS_OUTPUT_FILE=./js/scripts.js
JS_TARGET=cat $(JS_JQUERY_SRC) $(JS_FOUNDATION_SRC) $(JS_SOURCE_FILES) > $(JS_OUTPUT_FILE)

default: build

prod: CSS_FLAGS = -t compact
prod: build

style:
	$(CSS_TARGET)

javascript:
	$(JS_TARGET)


build: style javascript

