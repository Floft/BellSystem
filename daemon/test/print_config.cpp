#include "../config.h"
#include <stdexcept>

int main()
try {
	Config c("../../example.xml");
	cout << c << endl;

	return 0;
} catch (Config::Error& e) {
	cout << "Error: " << e.what() << endl;
	return 1;
}
