# Defining Macros

CSS_CC=sassc
CSS_FLAGS=-I
CSS_SRC_DIR=sass
CSS_SRC_MAIN=$(CSS_SRC_DIR)/style.scss
CSS_OUTPUT_FILE=style.css
CSS_INCLUDE_PATHS=$(CSS_FLAGS) "bower_components/foundation/scss"
CSS_TARGET=$(CSS_CC) $(CSS_INCLUDE_PATHS)\
						$(CSS_SRC_MAIN) $(CSS_OUTPUT_FILE)

build:
	$(CSS_TARGET)
