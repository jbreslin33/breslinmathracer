#ifndef SHAPEPARTIDOSTATES_H
#define CLIENTROBUSTSTATES_H

#include "../../../../fsm/state.h"

class ShapePartido;

/*******************************
*      GLOBAL_SHAPE_PARTIDO 
******************************/

class GLOBAL_SHAPE_PARTIDO : public State<ShapePartido>
{
private:
  GLOBAL_SHAPE_PARTIDO(){}
public:
  static GLOBAL_SHAPE_PARTIDO* Instance();
  void enter  (ShapePartido* shapePartido);
  void execute(ShapePartido* shapePartido);
  void exit   (ShapePartido* shapePartido);
  bool onLetter(ShapePartido* shapePartido, Letter* letter);
};

/*******************************
*       SHAPE PARTIDO STATES 
******************************/

class BATTLE_SHAPE_PARTIDO : public State<ShapePartido>
{
private:
  BATTLE_SHAPE_PARTIDO(){}
public:
  static BATTLE_SHAPE_PARTIDO* Instance();
  void enter  (ShapePartido* shapePartido);
  void execute(ShapePartido* shapePartido);
  void exit   (ShapePartido* shapePartido);
  bool onLetter(ShapePartido* shapePartido, Letter* letter);
};

class GAME_SHAPE_PARTIDO : public State<ShapePartido>
{
private:
  GAME_SHAPE_PARTIDO(){}
public:
  static GAME_SHAPE_PARTIDO* Instance();
  void enter  (ShapePartido* shapePartido);
  void execute(ShapePartido* shapePartido);
  void exit   (ShapePartido* shapePartido);
  bool onLetter(ShapePartido* shapePartido, Letter* letter);
};

#endif
