clean:
	rm -rf build

build:
	mkdir build
	ppm --no-intro --compile="src/tsa" --directory="build"

install:
	ppm --no-intro --no-prompt --install="build/net.intellivoid.tsa.ppm"