var isEventSupported = (function(){
	var TAGNAMES = {
		'select':'input','change':'input',
		'submit':'form','reset':'form',
		'error':'img','load':'img','abort':'img'
		};
	function isEventSupported(eventName) {
		var el = document.createElement(TAGNAMES[eventName] || 'div');
		eventName = 'on' + eventName;
		var isSupported = (eventName in el);
		if (!isSupported) {
			el.setAttribute(eventName, 'return;');
			isSupported = typeof el[eventName] == 'function';
		}
		el = null;
		return isSupported;
	}
	return isEventSupported;
})();

if (isEventSupported('touchstart')) {
	clickTrigger = 'touchstart click';
	mobile = true;
} else {
	clickTrigger = 'click';
	mobile = false;
}

function lazyScroll(lsSelector, lsTime, lsOffset) {
//    lsOffset = (typeof(lsOffset)!='undefined') ? lsOffset : 0;
//    $('html,body').animate({
//        scrollTop: lsSelector.offset().top + lsOffset
//    },lsTime);
}


$(document).ready(function(){
	/*$('button').hover(function(){
		$(this).toggleClass('act')
	});*/

	var calcDetail = $('#calc_detail').children();
	if (calcDetail[0]) {
		var resultBlock = $('#res'),
			resultForm = resultBlock.children('form'),
			resultFields = resultForm.children('input');
		$('.calc_act_block').children().on(clickTrigger,function(){
			var newOpening = calcDetail.eq(2).clone(true).addClass($(this).data('type')),
				newOpeningSequence = $(this).parent().nextUntil('li:not(.opening)');
			newOpening.find('input').val('').end().find('input.quant').val(1);
			if (newOpeningSequence.length==0)
				$(this).parent().after(newOpening);
			else
				newOpeningSequence.filter(':last').after(newOpening);
			newOpening.fadeTo(200,1);
			return false;
		});
		calcDetail.not(':eq(2)').each(function(){
			$(this).find('a:first').on(clickTrigger,function(){
				$(this).closest('ul').slideUp(200,function(){
					calcInput = calcInput.not($(this).find('input'));
					countError();
					if (!$(this).hasClass('standard')) {
						calcAddType.removeClass('disabled').prop('disabled',false);
						$(this).remove();
					} else {
						curStandardFloor -= 1;
						$(this).remove();
						$('#calc').find('ul.standard').each(function(index){
							$(this).find('h2').text(index+2+' этаж');
						});
					}
				});
				return false;
			});
		});
		calcDetail.eq(2).find('a').on(clickTrigger,function(){
			$(this).closest('.opening').slideUp(200,function(){
				calcInput = calcInput.not($(this).find('input'));
				$(this).remove();
				countError();
			});
			return false;
		});
		var calcAdd = $('ul.add_floor'),
			calcAddType = calcAdd.find('select'),
			curStandardFloor = 2,
			calcInput = $(),
			calcInputCur,
			countError = function(){
				if (calcInput.filter('.error').length>0) {
					$('#total_error').text('Некоторые поля не заполнены или заполнены некорректно');
					resultBlock.slideUp(300);
					return true;
				} else {
					$('#total_error').text('');
					return false;
				}
			},
			getVal = function(obj){
				return parseFloat($(obj).val())
			};
		calcAdd.find('button').on(clickTrigger,function(){
			var newFloor = calcDetail.eq(calcAddType.val()).clone(true);
			if (calcAddType.val()==0) {
				newFloor.find('h2').text(curStandardFloor+' этаж').end().find('input').val('').end().find('input.quant').val(1);
				if (calcAddType.hasClass('disabled'))
					calcAdd.prev().before(newFloor);
				else
					calcAdd.before(newFloor);
				curStandardFloor += 1;
			} else {
				newFloor.find('h2').text('Мансардный этаж');
				calcAdd.before(newFloor);
				calcAddType.addClass('disabled').prop('disabled',true).val('0');
			}
			newFloor.fadeIn(400,function(){
				lazyScroll(calcAdd, 1000)
			});
			return false;
		});
		$('input:not(.quant)').on('focus',function(){
			$(this).removeClass('error');
			countError();
		});
		$('input:not(.text)').on('keyup',function(){
			var testVal = $(this).val();
			$(this).val(testVal.replace(/[^0-9,\.]/g,'').replace(',','.'));
		});
		$('input.quant').on('blur',function(){
			var testVal = $(this).val();
			if(/\D/.test(testVal)||testVal==0)
				$(this).val(1);
		});
		$('#baffle_trigger').on('change',function(){
			if ($(this).val()==0) {
					calcInput = calcInput.not($('#baffle').hide().find('input').val('').removeClass('error'));
					countError();
			} else
				$('#baffle').show();
		});
		$('select.floor_type_trigger').on('change',function(){
			if ($(this).val()==0) {
					calcInput = calcInput.not($(this).parent().next().hide().find('input').val('').removeClass('error'));
					countError();
			} else
				$(this).parent().next().show();
		});
		$('#total_btn').children(':eq(1)').on(clickTrigger,function(){
			calcInput = $('#calc').find('input:visible:not(.quant)');
			for (var j=0,ci=calcInput.length;j<ci;j++) {
				calcInputCur = calcInput.eq(j).val();
				var periodTest = calcInputCur.match(/\./g);
				periodTest = (periodTest) ? periodTest.length : 0;
				if (calcInputCur==''||isNaN(parseFloat(calcInputCur))||(parseFloat(calcInputCur)==0&&calcInput.eq(j).attr('id')!='b6')||periodTest>1)
					calcInput.eq(j).addClass('error');
			}
			if (!countError()) {
				var volOut = 0,
					volInn = 0,
					floorNum = 0,
					floorType = 0,
					openingOut = 0,
					openingInn = 0,
					openingOutCur = 0,
					openingInnCur = 0,
					ubOutLength = 0,
					ubInnLength = 0,
					ubBeltOut = 0,
					ubBeltInn = 0,
					b73 = 0;

				b3 = parseFloat((getVal('#b1')*2+getVal('#b2')*2).toFixed(3));
				calcFloor = $('#calc').children('ul.floor:not(.add_floor)');
				for (var i=0;i<calcFloor.length;i++) {
					floorNum = getVal(calcFloor.eq(i).find('.floor_quant .quant'));
					if (isNaN(floorNum))
						floorNum = 1;
					volOut += parseFloat((getVal(calcFloor.eq(i).find('input.floor_height'))*getVal('#b4')*b3*floorNum).toFixed(2)); //объем блоков на наружные стены
					if (calcFloor.eq(i).hasClass('attic'))
						volOut += getVal('#b26')*getVal('#b27')/2*getVal('#b4')*2; //объем блоков на два фронтона добавляется к общему объему блоков на наружные стены
					else {
						volInn += parseFloat((getVal(calcFloor.eq(i).find('input.floor_height'))*getVal('#b6')*getVal('#b8')*floorNum).toFixed(2)); //объем блоков на внутренние стены
						if (getVal(calcFloor.eq(i).find('.floor_type_trigger'))==1) {
							floorType += getVal(calcFloor.eq(i).find('select.b78')) * b3 * 0.25 * floorNum; //объем блоков на уровне перекрытия
							resultForm.append('<input type="hidden" name="calc_extra_4[]" value="'+calcFloor.eq(i).find('select.b78').val()+'">');
							resultForm.append('<input type="hidden" name="calc_extra_5[]" value="'+floorNum+'">');
						}
						b73 += b3*2*floorNum; //количество U-блоков на монолитный пояс внешних стен с учетом количества полных этажей
						ubBeltOut += b3*getVal('#b4')*0.25*floorNum; //объем U-блоков на монолитный пояс внешних стен
						ubBeltInn += getVal('#b6')*getVal('#b8')*0.25*floorNum; //объем U-блоков на монолитный пояс внутренних стен
					}
					if (calcFloor.eq(i).hasClass('first'))
						if (getVal('#baffle_trigger')==1)
							b107 = parseFloat((getVal('#b105')*getVal('#b106')*getVal(calcFloor.eq(i).find('input.floor_height'))).toFixed(3));  //объем блоков на перегородки с учетом высоты первого этажа
						else
							b107 = 0;
					floorOpeningOut = calcFloor.eq(i).find('li.outer').find('input');
					floorOpeningInn = calcFloor.eq(i).find('li.inner').find('input');
					if (floorOpeningOut[0]) {
						for (var op1=0;op1<floorOpeningOut.length;op1+=3) {
							openingOutCur += parseFloat((getVal(floorOpeningOut.eq(op1))*getVal(floorOpeningOut.eq(op1+1))*getVal(floorOpeningOut.eq(op1+2))*getVal('#b4')).toFixed(2)); //объем проемов в наружных стенах этого этажа
							ubOutLength += (getVal(floorOpeningOut.eq(op1+1))+0.5)*getVal(floorOpeningOut.eq(op1+2)); //длина U-блоков на проемы наружных стен
						}
						openingOutCur *= floorNum; //с учетом количества этажей данного типа
						ubOutLength *= floorNum; //с учетом количества этажей данного типа
					}
					if (floorOpeningInn[0]) {
						for (var op2=0;op2<floorOpeningInn.length;op2+=3) {
							openingInnCur += parseFloat((getVal(floorOpeningInn.eq(op2))*getVal(floorOpeningInn.eq(op2+1))*getVal(floorOpeningInn.eq(op2+2))*getVal('#b8')).toFixed(2)); //объем проемов во внутренних стенах этого этажа
							ubInnLength += (getVal(floorOpeningInn.eq(op2+1))+0.5)*getVal(floorOpeningInn.eq(op2+2)); //длина U-блоков на проемы внутренних стен
						}
						openingInnCur *= floorNum; //с учетом количества этажей данного типа
						ubInnLength *= floorNum; //с учетом количества этажей данного типа
					}
					openingOut += openingOutCur; //объем проемов в наружных стенах всего дома
					openingInn += openingInnCur; //объем проемов во внутренних стенах всего дома
					openingOutCur = 0;
					openingInnCur = 0;
				}

				ubVol = parseFloat((ubOutLength*0.25*getVal('#b4')).toFixed(2)); //объем U-блоков на проемы наружных стен

				var b69 = ubOutLength*2;
				if (b69!=~~(b69))
					b69 = ~~(b69)+1;
				if (b73==0)
					b73 = b3*2;
				if (b73!=~~(b73))
					b73 = ~~(b73)+1;
				$('#b69').text(b69); //количество U-блоков на проемы наружных стен
				$('#b73').text(b73); //количество U-блоков на монолитный пояс внешних стен

				var b65 = volOut - openingOut;
				volOut = volOut - openingOut - ubVol - ubBeltOut; //объем блоков на наружные стены дома с учетом проемов, перемычек и монолитного пояса наружных стен
				if (volOut>=0)
					$('#b76').text(parseFloat(volOut.toFixed(3)));
				else {
					$('#b76').text('---');
					$('#total_error').text('Ошибка. Объем наружных стен меньше суммарного объема исключений из них');
				}
				$('#b96').text(ubInnLength*2);
				var b92 = volInn - openingInn;
				volInn = volInn - openingInn - (ubInnLength*getVal('#b8')*0.25) - ubBeltInn; //объем блоков на внутренние стены с учетом проемов, перемычек и монолитного пояса внутренних стен
				if (volInn>=0)
					$('#b102').text(parseFloat(volInn.toFixed(3)));
				else {
					$('#b102').text('---');
					$('#total_error').text('Ошибка. Объем внутренних несущих стен меньше суммарного объема исключений из них');
				}
				$('#b107').text(b107); //объем блоков на перегородки
				$('#b79').text(floorType); //объем блоков на уровне перекрытия
				if (getVal('#baffle_trigger')==1)
					b105106 = getVal('#b105')*getVal('#b106');
				else
					b105106 = 0;
				b117 = parseFloat((1.12*(b65+floorType+b92+b105106)).toFixed(3)); // кол-во упаковок клея
				if (!isNaN(b117)) {
					if (b117!=~~(b117))
						b117 = ~~(b117)+1;
					$('#b117').text(b117);
				} else
					$('#b117').text('---');
				resultBlock.slideDown(300);
				lazyScroll($('#footer'), 1000);

				if ($('#total_error').text()=='') {
					resultBlock.find('li.calc_input').each(function(index){
						var basketValue = ($(this).text()=='---') ? 0 : $(this).text();
						resultFields.eq(index).val(basketValue);
					});
					resultFields.eq(8).val($('#b4').val());
					resultFields.eq(9).val($('#b8').val());
					if ($('select.baffle_trigger').eq(0).val()==1)
						resultFields.eq(10).val($('#b106').val());
					$('#basket_btn').show();
				} else {
					$('#basket_btn').hide();
				}
			}
			return false;
		});
	}
});