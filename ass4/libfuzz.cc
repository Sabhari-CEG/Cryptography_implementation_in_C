#include<stdint.h>
#include<stddef.h>

bool fuzz(const uint8_t *data , size_t s){
	return s >= 3 &&
		data[0] == 'A' &&
		data[1] == 'B' &&
		data[2] == 'C' &&
		data[3] == 'D';
}
extern "C" int LLVMFuzzerTestOneInput(const uint8_t *data, size_t s){
	fuzz(data,s);
	return 0;
}
