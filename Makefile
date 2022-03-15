.PHONY: build

all: build

build:
	@rm -r build && mkdir build
	@rsync -avz src/mahara/htdocs/. build/.
	@rsync -avz src/mahara-artefact_cpds/. build/.
	@mkdir -p build/local/lang/en.utf8 && rsync -avz src/mahara-local-lang-en/. build/local/lang/en.utf8/.
	@mkdir -p build/theme/solent && rsync -avz src/mahara-theme-solent/. build/theme/solent/.