.PHONY: build

all: build

build:
	@rm -r build && mkdir build
	@rsync -avz src/mahara/htdocs/. build/.
	@rsync -avz src/mahara-artefact_cpds/. build/.
	@mkdir -p build/local/lang/en.utf8 && rsync -avz src/mahara-local-lang-en/. build/local/lang/en.utf8/.
	@mkdir -p build/theme/solent && rsync -avz src/mahara-theme-solent/. build/theme/solent/.
	@rm build/theme/default/.gitignore
	@rm build/theme/maroon/.gitignore
	@rm build/theme/modern/.gitignore
	@rm build/theme/ocean/.gitignore
	@rm build/theme/primaryschool/.gitignore
	@rm build/theme/raw/.gitignore
	gulp css
	@rsync -avz src/chrome-php build/lib